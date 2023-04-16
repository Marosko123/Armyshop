<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestViewController;
use App\Http\Controllers\Api\LoginRegisterViewController;
use App\Http\Controllers\Api\ProductsController;

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

Route::get('/', function () {
    return view('landingPage');
});

//Login and register menu
Route::get('login', function () {
    return view('loginAndRegisterMenu');
});

// Payment detail
Route::get('paymentDetail', function () {
    return view('paymentDetail');
});

// Products
Route::get('products', function () {
    return view('products');
});

// Products
Route::get('products/category/{category}', function () {
    return view('products');
});

// Products
Route::get('products/subcategory/{subcategory}', function () {
    return view('products');
});

// Product detail
Route::get('products/{product}', function () {
    return view('productDetail');
});

Route::get('productDetail', function () {
    return view('productDetail');
});

// User profile
Route::get('profile', function () {
    return view('userProfile');
});

// Shopping cart
Route::get('shoppingCart', function () {
    return view('shoppingCart');
});