<?php

namespace App\Http\Controllers\ShopModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;

class HomeController extends Controller
{
    public function index()
    {
        return view("shop.home")->with([
            "page" => "home"
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
            'image', 'parent'
       ])->get();
       $images = Image::all();
       return view('shop.category')->with([
           'categories'=>$categories,
           'images'=>$images,

       ]);
   }
   public function brand()
   {
       return view('shop.brand');
   }
}
