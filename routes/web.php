<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

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

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/gallery', function () {
    return view('gallery');
});

// Admin routes
Route::get('/admin/', 'App\Http\Controllers\AuthController@index');

Route::get('/admin/login', 'App\Http\Controllers\AuthController@index');
Route::post('post-login', 'App\Http\Controllers\AuthController@postLogin'); 

Route::get('/admin/dashboard', 'App\Http\Controllers\AuthController@index');

// Route::get('/admin/post-register', 'App\Http\Controllers\AuthController@postRegister'); 

Route::get('/admin/gallery', 'App\Http\Controllers\GalleryController@list'); 
Route::post('/admin/upload-image', 'App\Http\Controllers\GalleryController@upload'); 
Route::post('/admin/delete-image', 'App\Http\Controllers\GalleryController@delete'); 

Route::get('/admin/logout', 'App\Http\Controllers\AuthController@logout');



