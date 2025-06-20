<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopModule\HomeController;
use App\Http\Controllers\ShopModule\ProductController;
use App\Http\Controllers\ShopModule\ContactController;
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
// Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');

//Contact Route
Route::resource('contact', ContactController::class);

//shop routes for products
Route::get('/brand/{slug}/products', [ProductController::class, 'showBrandProducts'])->name('brand_product');
Route::get('/category/{slug}/products', [ProductController::class, 'showCategoryProducts'])->name('category_product');
Route::get('/tag/{slug}/products', [ProductController::class, 'showTagProducts'])->name('tag_product');
Route::get('/product/{slug}', [ProductController::class, 'showSingleProduct'])->name('single_product');

Route::get('/cart' , [HomeController::class , 'cart'])->name('cart');
Route::get('/checkout' , [HomeController::class ,'show_checkout_page'])->name('checkout_name');
Route::get('/categories' , [HomeController::class , 'category'])->name('category');
Route::get('/brands' ,[HomeController::class , 'brand'])->name('brand');
Auth::routes();

// Shop Module Auth Routes
Route::group(["middleware"=>["auth","user"]],function () {

});

//
