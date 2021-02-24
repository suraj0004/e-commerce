<?php

namespace App\Http\Controllers\ShopModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("shop.home");
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

}
