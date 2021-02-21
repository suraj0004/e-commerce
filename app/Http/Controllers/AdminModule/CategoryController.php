<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\Validator;
use Str;
use Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::with(['image','parent'])->get();
        $images = Image::all();
        return view('admin.category.category')->with([
            'categories'=>$categories,
            'images'=>$images,
            'page'=>'category'
        ]);
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'category_name'=> 'required|string|max:250|unique:categories,name',
            'select_image' => 'nullable|numeric|exists:images,id',
            'upload_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'parent_id' => "nullable|numeric|exists:categories,id"
        ])->validate();

        $category = new Category();
        $category->name = $request->category_name;
        $category->slug = Str::slug($request->category_name);

        if($request->has('select_image') && !empty($request->select_image)){

            $category->image_id = $request->select_image;

        }else if($request->has('upload_image') && !empty($request->upload_image)){

            $imageName = generateRandomString() . '.' . $request->upload_image->extension();
            Storage::disk('dynamic_images')->putFileAs(null, $request->upload_image, $imageName);
            $row = new Image();
            $row->image = $imageName;
            $row->save();
            $category->image_id = $row->id;

        }else{

            return redirect()->back()->withErrors([
                "error" => "Either Select Image of Upload Image.",
            ]);

        }

        if($request->has("parent_id") && !empty($request->parent_id)){
            $category->parent_id = $request->parent_id;
        }

        $category->save();
        $request->session()->flash('status', 'Category Added Successfully');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'edit_category_id'=> 'required|numeric|exists:categories,id',
            'edit_category_name' => 'required|string|max:250|unique:categories,name,'.$request->edit_category_id.',id',
            'edit_select_image' => 'nullable|numeric|exists:images,id',
            'edit_upload_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'edit_parent_id' => "nullable|numeric|exists:categories,id"
        ])->validate();

        $category = Category::find($request->edit_category_id);
        $category->name = $request->edit_category_name;
        $category->slug = Str::slug($request->edit_category_name);
        $category->save();
        $request->session()->flash('status', 'Category Updated Successfully');
        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        Category::where('id', $id)->delete();
        $request->session()->flash('status', "Category Deleted Successfully");
        return redirect()->back();
    }
}
