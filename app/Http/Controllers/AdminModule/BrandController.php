<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Image;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::all();
        $images = Image::all();
        return view('admin.brand.brand')->with([
            'brands'=>$brand,
            'page'=> 'brand',
            'image'=>$images
        ]);
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'brand_name' => 'required|string|max:250',
            'slug_name' => 'required|string|max:250',
            'brand_image_id'=>'required|numeric|exists:images,id'
        ])->validate();
        $brand = new Brand();
        $brand->name = $request->brand_name;
        $brand->slug = $request->slug_name;
        $brand->image_id = $request->brand_image_id;
        $brand->save();
        $request->session()->flash('status', 'Brand Added Successfully');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        Brand::where('id', $id)->delete();
        $request->session()->flash('status', 'Brand Deleted Successfully');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'edit_brand_id'=> 'required|numeric|exists:brands,id',
            'edit_brand_name' => 'required|string|max:250',
            'edit_slug_name' => 'required|string|max:250',
            'edit_brand_image_id'=>'required|numeric|exists:images,id'
        ])->validate();
        $brand = Brand::find($request->edit_brand_id);
        $brand->name = $request->edit_brand_name;
        $brand->slug = $request->edit_slug_name;
        $brand->image_id = $request->edit_brand_image_id;
        $brand->save();

        $request->session()->flash('status', 'Brand Updated Succcessfully');
        return redirect()->back();

    }
}
