<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    public function index(){
        $images = Image::all();
        $data = [
            'images' => $images ,
            'page' => 'images',
        ];
        return view('admin.images.index')->with($data);

    }
    public function store(Request $request){
        Validator::make($request->all(),[
            'image_name'=>'string|required|max:250'

        ])->validate();
        $row = new Image();
        $row->image = $request->image_name;
        $row->save();
        $request->session()->flash('status','image added successfully');
        return redirect()->back();
    }
    public function delete(Request $request,$id){
        Image:: where('id',$id)->delete();
        $request->session()->flash('status','deleted successfully');
        return redirect()->back();


    }
    public function update(Request $request){
        Validator::make($request->all(),[
            'edit_image_name'=>'string|required|max:250'
        ])->validate();
        $image=Image::find($request->edit_image_id);
        $image->image=$request->edit_image_name;
        $image ->save();
        $request->session()->flash('status','image updated successfully');
        return redirect()->back();



    }
}
