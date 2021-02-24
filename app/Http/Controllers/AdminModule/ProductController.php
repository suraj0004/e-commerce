<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;
use Str;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::with([
            'categories',
            'tags'
        ])->get();

        // return $product;

        $brands = Brand::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.product.product')->with([
            'products'=>$product,
            'page'=>'product',
            'brands'=>$brands,
            'categories'=>$categories,
            'tags'=>$tags
        ]);
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'brand_id'=>'required|numeric|exists:brands,id',
            'category_id'=>'required|array',
            'category_id.*'=>'required|numeric|exists:categories,id',
            'tag_id'=>'required|array',
            'tag_id.*'=>'required|numeric|exists:tags,id',
            'product_name'=> 'required|string|max:250|unique:products,name',
            'product_quantity'=>'required|numeric',
            'product_weight'=>'required|numeric',
            'weight_type'=>'required',
            'product_price'=>'required|numeric'
        ])->validate();
        $product = new Product();
        $product->brand_id = $request->brand_id;
        $product->name = $request->product_name;
        $product->slug = Str::slug($request->product_name);
        $product->quantity = $request->product_quantity;
        $product->weight = $request->product_weight;
        $product->weight_type = $request->weight_type;
        $product->price = $request->product_price;

        $product->save();
        $product->categories()->sync($request->category_id);
        $product->tags()->sync($request->tag_id);
        $request->session()->flash('status', 'Product Added Successfully');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'edit_product_id'=>'required|numeric',
            'edit_product_name'=> 'required|string|max:250|unique:products,name,'.$request->edit_product_id.',id',
            'edit_product_quantity'=>'required|numeric',
            'edit_product_weight'=>'required|numeric',
            'edit_weight_type'=>'required',
            'edit_product_price'=>'required|numeric'
        ])->validate();

        $product = Product::find($request->edit_product_id);

        $product->name = $request->edit_product_name;
        $product->slug = Str::slug($request->edit_product_name) ;
        $product->quantity = $request->edit_product_quantity;
        $product->weight = $request->edit_product_weight;
        $product->weight_type = $request->edit_weight_type;
        $product->price = $request->edit_product_price;

        $product->save();
        $request->session()->flash('status', 'Updated Successfully');
        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {

        try {
            Product::where('id', $id)->delete();
            $request->session()->flash('status', 'Deleted Successfully');
            return redirect()->back();
        } catch (\Exception $th) {
            $request->session()->flash('error', 'Cannot Delete the product');
            return redirect()->back();
        }
    }
}
