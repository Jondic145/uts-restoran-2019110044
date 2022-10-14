<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'tentang'])->name('about');
Route::get('menu', [ProductController::class, 'menu'])->name('product');
Route::get('test', [TestimonialController::class, 'test'])->name('testimonial');
Route::get('kontak', [ContactController::class, 'kontak'])->name('contact');

// Route::get('/', function () {
//     return view('index');
// });


