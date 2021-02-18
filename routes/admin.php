<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminModule\HomeController;

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

});
