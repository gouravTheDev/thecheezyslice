<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about-us', function () {
    return view('aboutus');
});

Route::get('/be-partner', function () {
    return view('bePartner');
});

Route::get('/warranty', function () {
    return view('warranty');
});

Route::get('/prouduct-types', function () {
    return view('productTypes');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/product-details', function () {
    return view('productDetails');
});

Route::get('/admin', function () {
    return view('admin.login');
});



