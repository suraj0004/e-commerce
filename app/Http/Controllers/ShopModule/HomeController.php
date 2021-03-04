<?php

namespace App\Http\Controllers\ShopModule;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;

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
        return view('shop.product');
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
            'image'
        ])->get();

        $counts = Brand::withCount('image')->get();

        // foreach ($counts as $count) {
        //     return $count->count();
        // }
        // return $brands->count();

        return view('shop.brand')->with([
            'brands' => $brands,
            'counts' => $counts
        ]);
    }
}
