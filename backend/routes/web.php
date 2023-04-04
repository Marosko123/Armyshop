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


//TEST
Route::get('test', [TestViewController::class, 'get']);

//Login and register menu
Route::get('login', [LoginRegisterViewController::class, 'get']);
// Payment detail
Route::get('paymentDetail', function () {
    return view('paymentDetail');
});

// Products
Route::get('products', function () {
    return view('products');
});

// Product detail
Route::get('productDetail', function () {
    return view('productDetail');
});
