<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// --- PORTOFOLIO ROUTES ---
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/portfolio/detail', function () {
    return view('portfolio.show');
})->name('portfolio.show');

// --- BLOG ROUTES ---
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Mengarah ke file resources/views/blog/show.blade.php
Route::get('/blog/detail', function () {
    return view('blog.show');
})->name('blog.show');

// Route untuk Halaman Tentang Kami
Route::get('/about', function () {
    return view('about');
})->name('about');

// Rute untuk Halaman Kategori Produk
Route::prefix('produk')->group(function () {
    Route::get('/rfid', [ProductController::class, 'rfid'])->name('product.rfid');
    Route::get('/ai', [ProductController::class, 'ai'])->name('product.ai');
    Route::get('/iot', [ProductController::class, 'iot'])->name('product.iot');
});

// Route static/dummy untuk pengujian tampilan Detail Produk
Route::get('/products/detail', function () {
    return view('products.show');
})->name('products.show');