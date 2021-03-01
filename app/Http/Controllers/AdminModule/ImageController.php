<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Storage;
use App\Http\Resources\ImageCollection;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        $data = [
            'images' => $images,
            'page' => 'images',
        ];
        return view('admin.images.index')->with($data);

    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'images' => "required|array",
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ])->validate();

        foreach ($request->images as $image) {

            $imageName = generateRandomString() . '.' . $image->extension();
            Storage::disk('dynamic_images')->putFileAs(null, $image, $imageName);

            $row = new Image();
            $row->image = $imageName;
            $row->save();

        }

        return back()
            ->with('status', 'You have successfully upload image/images.');
    }

    public function delete(Request $request, $id)
    {
        $row = Image::find($id);

        if (!$row) {
            return redirect()->back()->withErrors([
                "error" => "Oops something went wrong",
            ]);
        }

        if (Storage::disk('dynamic_images')->exists($row->image)) {
            Storage::disk('dynamic_images')->delete($row->image);
        }
        $row->delete();
        $request->session()->flash('status', 'deleted successfully');
        return redirect()->back();

    }
    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'edit_image_id' => 'required|numeric|exists:images,id',
            'edit_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ])->validate();

        $row = Image::find($request->edit_image_id);

        // deleting existing image for this ID
        if (Storage::disk('dynamic_images')->exists($row->image)) {
            Storage::disk('dynamic_images')->delete($row->image);
        }

        // Upload new image for this ID
        $imageName = generateRandomString() . '.' . $request->edit_image->extension();
        Storage::disk('dynamic_images')->putFileAs(null, $request->edit_image, $imageName);

        // Updating image name in DB for this ID
        $row->image = $imageName;
        $row->save();

        $request->session()->flash('status', 'image updated successfully');
        return redirect()->back();

    }

    public function getImages()
    {
        $images = Image::latest()->get();
        return (new ImageCollection($images))->additional([
            "success" => true,
            "message" => "Images get successfully",
        ]);
    }
}
