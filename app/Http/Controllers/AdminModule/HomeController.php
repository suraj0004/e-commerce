<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("admin.home");
    }

    public function showMyProfilePage()
    {
        return view("admin.profile");
    }

    public function showTablePage()
    {
        return view('admin.table');
    }
}
