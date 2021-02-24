<?php

namespace App\Http\Controllers\AdminModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Http\Resources\ImageCollection;

class AjaxController extends Controller
{
    public function getImages()
    {
        $images = Image::all();
        return (new ImageCollection($images))->additional([
            "success" => true,
            "message" => "Images get successfully",
        ]);
    }
}
