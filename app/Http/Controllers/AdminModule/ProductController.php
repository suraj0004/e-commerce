<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::all();
        return view('admin.product.product')->with([
            'products'=>$product,
            'page'=>'product'
        ]);
    }

    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'product_name'=> 'required|string|max:250',
            'slug_name'=>'required|string|max:250',
            'product_quantity'=>'required|numeric',
            'product_weight'=>'required|numeric',
            'weight_type'=>'required',
            'product_price'=>'required|numeric'

        ])->validate();
        $product = new Product();

        $product->name = $request->product_name;
        $product->slug = $request->slug_name;
        $product->quantity = $request->product_quantity;
        $product->weight = $request->product_weight;
        $product->weight_type = $request->weight_type;
        $product->price = $request->product_price;

        $product->save();
        $request->session()->flash('status', 'Product Added Successfully');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'edit_product_id'=>'required|numeric',
            'edit_product_name'=> 'required|string|max:250',
            'edit_slug_name'=>'required|string|max:250',
            'edit_product_quantity'=>'required|numeric',
            'edit_product_weight'=>'required|numeric',
            'edit_weight_type'=>'required',
            'edit_product_price'=>'required|numeric'
        ])->validate();

        $product = Product::find($request->edit_product_id);

        $product->name = $request->edit_product_name;
        $product->slug = $request->edit_slug_name;
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
        Product::where('id', $id)->delete();
        $request->session()->flash('status', 'Deleted Successfully');
        return redirect()->back();
    }
}
