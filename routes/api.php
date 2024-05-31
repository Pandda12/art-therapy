<?php

use Illuminate\Support\Facades\Route;

Route::post('/search', \App\Http\Controllers\Product\Guest\SearchController::class)->name('product.search');
Route::post('/get-cart', [\App\Http\Controllers\CartController::class, 'show'])->name('cart.show');
