<?php

namespace App\Http\Controllers\ShopModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showBrandProducts($slug)
    {
        $products = Product::with([
            'categories',
            'image',
            'gallery'
        ])
        ->whereHas('brand',function($query)use($slug){
            $query->where('brands.slug','=',$slug);
        })->get();

        return view("shop.product.index")->with([
            "products" => $products
        ]);
    }

    public function showCategoryProducts($slug)
    {
        $products= Product::with([
            'categories',
            'image',
            'gallery'
        ])
        ->whereHas('categories',function($query)use($slug){
            $query->where('categories.slug','=',$slug);
        })->get();
        return view("shop.product.index")->with([
            "products"=>$products
        ]);
    }

    public function showSingleProduct($slug)
    {
        $product = Product::with([
            'categories',
            'tags',
            'gallery'
        ])->where('slug',$slug)
        ->first();

        $product->gallery->prepend($product->image()->first()); // insert primary image at the first position in the image gallery

        $similar_products = Product::with(['image'])
                            ->where('id','!=',$product->id)
                            ->whereHas('categories',function($query)use($product){
                                $query->whereIn('categories.id',$product->categories->pluck('id'));
                            })
                            ->get();

        return view('shop.product')->with([
            "page" => "product",
            "product" => $product,
            "similar_products" => $similar_products
        ]);
    }


}
