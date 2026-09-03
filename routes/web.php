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