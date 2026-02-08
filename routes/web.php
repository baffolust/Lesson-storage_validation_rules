<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/products/create', [ProductController::class, 'store'] )->name('product.create');

Route::get('/products/index', [ProductController::class, 'index'])->name('product.index');
