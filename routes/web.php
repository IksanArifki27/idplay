<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\UserController;
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

// Route::get('/products', function () {
//     return view('products');
// });
Route::get('/products',[PaketController::class,'paketProduk']);
Route::get('/detail-product/{id}',[PaketController::class,'detailProduk']);
Route::get('/view-category/{slug}',[PaketController::class,'viewCategory']);

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
Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/login',[AuthController::class,'loginView'])->name('login');
Route::post('/login',[AuthController::class,'loginPost']);
Route::get('/register',[AuthController::class,'registerView']);
Route::post('/register',[AuthController::class,'registerPost']);
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/KelolaPaket',[PaketController::class,'kelolaPaket']);
Route::post('/tambahPaket',[PaketController::class,'tambahPaket']);
Route::post('/KelolaPaket/{id}',[PaketController::class,'updatePaket']);
Route::get('/hapusPaket/{id}',[PaketController::class,'hapusPaket']);

Route::get('/KelolaKategori',[CategoryController::class,'kelolaKategori']);
Route::post('/tambahKategori',[CategoryController::class,'tambahKategori']);
Route::get('/hapusKategori/{id}',[CategoryController::class,'hapusKategori']);

Route::get('/KelolaUser',[UserController::class,'KelolaUser']);
Route::post('/KelolaUser/{id}',[UserController::class,'UpdateUser']);
Route::get('/HapusUser/{id}',[UserController::class,'HapusUser']);



