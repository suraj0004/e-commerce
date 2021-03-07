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
            'tags',
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
            'tags',
            'image',
            'gallery'
        ])
        ->whereHas('categories',function($query)use($slug){
            $query->where('categories.slug','=',$slug);
        })->get();
        return view("shop.product.index")->with([
            "products"=>$products
        ]);

        //
    }
}
