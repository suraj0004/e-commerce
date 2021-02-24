<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopModule\HomeController;
Use Illuminate\Support\Facades\Auth;
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

// Shop Module Guest/Auth Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');

//shop routes for products
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/cart' , [HomeController::class , 'cart'])->name('cart');
Route::get('/checkout' , [HomeController::class ,'show_checkout_page'])->name('checkout_name');
Auth::routes();

// Shop Module Auth Routes
Route::group(["middleware"=>["auth","user"]],function () {

});

//
