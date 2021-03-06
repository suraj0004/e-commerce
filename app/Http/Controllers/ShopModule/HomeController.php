<?php

namespace App\Http\Controllers\ShopModule;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        return view("shop.home")->with([
            "page" => "home",
        ]);
    }

    public function contact()
    {
        return view("shop.contact");
    }

    //products fn
    public function product()
    {
        $brands = Brand::with([
            'image', 'products'
        ])->get();

        return $brands;
        return view('shop.product')->with([
            'brands' => $brands
        ]);
    }
    public function cart()
    {
        return view('shop.cart');
    }
    public function show_checkout_page()
    {
        return view('shop.checkout');
    }

    public function category()
    {
        $categories = Category::with([
            'image', 'parent',
        ])->get();

        return view('shop.category')->with([
            'categories' => $categories,
        ]);
    }

    public function brand()
    {
        $brands = Brand::with([
            'image', 'products'
        ])->withCount('products')->get();

        return view('shop.brand')->with([
            'brands' => $brands
        ]);
    }
}
