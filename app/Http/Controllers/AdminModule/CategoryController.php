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
            'category_image_id' => 'required|numeric|exists:images,id',
            'parent_id' => "nullable|numeric|exists:categories,id"
        ])->validate();

        $category = new Category();
        $category->name = $request->category_name;
        $category->slug = Str::slug($request->category_name);
        $category->image_id = $request->category_image_id;

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
            'edit_category_image_id' => 'required|numeric|exists:images,id',
            'edit_parent_id' => "nullable|numeric|exists:categories,id"
        ])->validate();

        $category = Category::find($request->edit_category_id);
        $category->name = $request->edit_category_name;
        $category->slug = Str::slug($request->edit_category_name);

        if($request->has("edit_parent_id") && !empty($request->edit_parent_id)){
            $category->parent_id = $request->edit_parent_id;
        }else{
            $category->parent_id = 0;
        }
        $category->image_id = $request->edit_category_image_id;

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
