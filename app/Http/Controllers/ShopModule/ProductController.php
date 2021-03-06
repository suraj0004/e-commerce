<?php

namespace App\Http\Controllers\ShopModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showBrandProducts($brand_id)
    {
        $products = Product::with([
            'categories',
            'tags',
            'image',
            'gallery'
        ])
        ->where('brand_id','=',$brand_id)->get();

        return view("shop.product.index")->with([
            "products" => $products
        ]);
    }
    public function showCategoryProducts($category_id)
    {
        $products= Product::with([
            'categories',
            'tags',
            'image',
            'gallery'
        ])
        ->whereHas('categories',function($query)use($category_id){
            $query->where('categories.id','=',$category_id);
        })->get();
        return view("shop.product.index")->with([
            "products"=>$products
        ]);

        //
    }
}
