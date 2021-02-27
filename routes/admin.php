<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminModule\HomeController;
use App\Http\Controllers\AdminModule\TagController;
use App\Http\Controllers\AdminModule\BrandController;
use App\Http\Controllers\AdminModule\ImageController;
use App\Http\Controllers\AdminModule\CategoryController;
use App\Http\Controllers\AdminModule\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(["middleware"=>["auth","admin"]],function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/my-profile', [HomeController::class, 'showMyProfilePage'])->name('my-profile');

    Route::get('/table',  [HomeController::class, 'showTablePage'])->name('tablePage');


    //tag routes
    Route::get("/tags",[TagController::class, 'index'])->name("tag.show");

    Route::post('/add-tag',[TagController::class, 'store'])->name("tag.add");
    Route::post('/update-tag',[TagController::class, 'update'])->name("tag.update");
    Route::post('/delete-tag/{id}',[TagController::class, 'delete'])->name("tag.delete");


    //brand routes
    Route::get('/brand', [BrandController::class, 'index'])->name('brand.show');

    Route::post('/add-brand', [BrandController::class, 'store'])->name('brand.add');
    Route::post('/delete-brand/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    Route::post('/update-brand', [BrandController::class, 'update'])->name('brand.update');

    //image routes
    Route::get('/images', [ImageController::class, 'index'])->name('image.show');

    Route::post('/add-image', [ImageController::class, 'store'])->name('image.add');
    Route::post('/delete-image/{image_id}', [ImageController::class, 'delete'])->name('image.delete');

    Route::post('/update-image', [ImageController::class, 'update'])->name('image.update');

    //Category Routes
    Route::get('/category', [CategoryController::class, 'index'])->name('category.show');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::post('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::post('/update-category', [CategoryController::class, 'update'])->name('category.update');

    //Product Route
    Route::get('/product', [ProductController::class, 'index'])->name('product.show');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::post('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::post('/update-product', [ProductController::class, 'update'])->name('product.update');



    Route::group(['prefix' => 'ajax', 'as' => 'ajax.'],function () {
        Route::get('getImages',[ImageController::class, 'getImages'])->name('getImages');
    });


});
