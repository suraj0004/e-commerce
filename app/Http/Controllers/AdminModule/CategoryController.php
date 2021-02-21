<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.category.category')->with([
            'categories'=>$categories,
            'page'=>'category'
        ]);
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'category_name'=> 'required|string|max:250',
            'category_slug_name'=>'required|string|max:250'
        ]);
        $categories = new Category();
        $categories->name = $request->category_name;
        $categories->slug = $request->category_slug_name;
        $categories->save();
        $request->session()->flash('status', 'Category Added Successfully');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'edit_category_id'=> 'required|numeric|exists:categories,id',
            'edit_category_name' => 'required|string|max:250',
            'edit_slug_name' => 'required|string|max:250'
        ])->validate();

        $category = Category::find($request->edit_category_id);
        $category->name = $request->edit_category_name;
        $category->slug = $request->edit_slug_name;
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
