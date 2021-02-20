<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminModule\HomeController;
use App\Http\Controllers\AdminModule\TagController;
use App\Http\Controllers\AdminModule\BrandController;

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

});
