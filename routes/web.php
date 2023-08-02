<?php

use App\Http\Controllers\BoergerController;
use App\Http\Controllers\DenairController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/about', [IndexController::class, 'about']);

Route::get('/boerger', [BoergerController::class, 'index'])->name('boerger');
Route::get('/boerger/{category_id}', [BoergerController::class, 'category_index'])->name('category_boerger');
Route::get('/boerger/product/{id}', [BoergerController::class, 'show'])->name('boerger-product');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{category_id}', [ProductController::class, 'category_index'])->name('category_product');
Route::get('/product/product/{id}', [ProductController::class, 'show'])->name('product-product');

Route::get('/denair', [DenairController::class, 'index'])->name('denair');
Route::get('/denair/{category_id}', [DenairController::class, 'category_index'])->name('category_denair');
Route::get('/denair/product/{id}', [DenairController::class, 'show'])->name('denair-product');



Route::get('article/{id}', [ArticleController::class, 'show'])->name('article');
