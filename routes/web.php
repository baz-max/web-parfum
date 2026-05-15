<?php

use Illuminate\Support\Facades\Route;



use App\Models\Product;

Route::get('/', function () {
    $products = Product::all();
    return view('landing', compact('products'));
});


use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{id}', [ProductController::class, 'detail'])->name('product.detail');

Route::get('/about', function () {
    return view('about');
})->name('about');
