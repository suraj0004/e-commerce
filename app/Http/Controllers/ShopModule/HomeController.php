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

    public function cart()
    {
        return view('shop.cart')->with([
            "page" => "cart",
        ]);
    }
    public function show_checkout_page()
    {
        return view('shop.checkout')->with([
            "page" => "show_checkout_page",
        ]);
    }

    public function category()
    {
        $categories = Category::with([
            'image', 'parent',
        ])->withCount('products')->get();

        return view('shop.category')->with([
            'categories' => $categories,
            "page" => "categories",
        ]);
    }

    public function brand()
    {
        $brands = Brand::with([
            'image', 'products'
        ])->withCount('products')->get();

        return view('shop.brand')->with([
            'brands' => $brands,
            "page" => "brands",
        ]);
    }
}
