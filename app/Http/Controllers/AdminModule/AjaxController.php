<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class AjaxController extends Controller
{
    public function getImages()
    {
        $images = Image::all();
        return response()->json([
            "success" => true,
            "message" => "Images get successfully",
            "data" => $images
        ], 200);
    }
}
