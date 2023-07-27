<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// public
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/single-product', function () {
    return view('product-single');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/single-info', function () {
    return view('info-single');
});

Route::get('/gallery', function () {
    return view('gallery2');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/status', function () {
    return view('status');
});
Route::get('/dashboard', function () {
    return view('layouts.dashboard.main');
});
Route::get('/login',[AuthController::class,'loginView']);
Route::post('/login',[AuthController::class,'loginPost']);
Route::get('/register',[AuthController::class,'registerView']);
Route::post('/register',[AuthController::class,'registerPost']);
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/KelolaPaket',[PaketController::class,'kelolaPaket']);
Route::post('/tambahPaket',[PaketController::class,'tambahPaket']);




