<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\WeightType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Str;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::with([
            'categories',
            'tags',
        ])->get();

        // return $product;
        $brands = Brand::all();
        $categories = Category::all();
        $tags = Tag::all();
        $weights = WeightType::all();
        return view('admin.product.product')->with([
            'products' => $product,
            'page' => 'product',
            'brands' => $brands,
            'categories' => $categories,
            'tags' => $tags,
            'weights' => $weights,
        ]);

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand_id' => 'required|numeric|exists:brands,id',
            'categories' => 'required|array',
            'categories.*' => 'required|numeric|exists:categories,id',
            'tags' => 'required|array',
            'tags.*' => 'required|numeric|exists:tags,id',
            'name' => 'required|string|max:250|unique:products,name',
            'quantity' => 'required|numeric',
            'weight' => 'required|numeric',
            'weight_type' => 'required',
            'price' => 'required|numeric',
            'feature_image_id' => 'required|numeric|exists:images,id',
            'image_ids' => 'required|array',
            'image_ids.*' => 'required|numeric|exists:images,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->errors()->all(),
                'message' => 'validation error',
            ], 422);
        }

        $product = new Product();
        $product->brand_id = $request->brand_id;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->quantity = $request->quantity;
        $product->weight = $request->weight;
        $product->weight_type = $request->weight_type;
        $product->price = $request->price;
        $product->image_id = $request->feature_image_id;
        $product->save();
        $product->categories()->sync($request->categories);
        $product->tags()->sync($request->tags);
        $product->gallery()->sync($request->image_ids);

        return response()->json([
            'success' => true,
            'message' => 'Product Added Successfully',
        ], 201);
    }

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'edit_product_id' => 'required|numeric',
            'edit_product_name' => 'required|string|max:250|unique:products,name,' . $request->edit_product_id . ',id',
            'edit_product_quantity' => 'required|numeric',
            'edit_product_weight' => 'required|numeric',
            'edit_weight_type' => 'required',
            'edit_product_price' => 'required|numeric',
        ])->validate();

        $product = Product::find($request->edit_product_id);

        $product->name = $request->edit_product_name;
        $product->slug = Str::slug($request->edit_product_name);
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
