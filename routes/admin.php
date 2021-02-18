<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminModule\HomeController;
use App\Http\Controllers\AdminModule\TagController;

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

    Route::get("/tags",[TagController::class, 'index'])->name("tag.show");

    Route::post('/add-tag',[TagController::class, 'store'])->name("tag.add");
    Route::post('/update-tag',[TagController::class, 'update'])->name("tag.update");
    Route::post('/delete-tag/{id}',[TagController::class, 'delete'])->name("tag.delete");


});
