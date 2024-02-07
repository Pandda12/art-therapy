<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('home');
})->name('main');

Route::get('/shop', \App\Http\Controllers\Product\Guest\IndexController::class)->name('shop.index');

Route::get('/categories', \App\Http\Controllers\Category\Guest\IndexController::class)->name('guest.category.index');
Route::get('/categories/{category}', \App\Http\Controllers\Category\Guest\ShowController::class)->name('guest.category.show');

Route::get('/brands', \App\Http\Controllers\Brand\Guest\IndexController::class)->name('guest.brand.index');
Route::get('/brands/{brand}', \App\Http\Controllers\Brand\Guest\ShowController::class)->name('guest.brand.show');

Route::get('/product/{product}', \App\Http\Controllers\Product\Guest\ShowController::class)->name('guest.product.show');

Route::post('/add-to-cart', \App\Http\Controllers\Cart\StoreController::class)->name('add_to_cart');

Route::get('/cart', \App\Http\Controllers\Cart\IndexController::class)->name('cart.index');
Route::get('/cart/clear-cart', \App\Http\Controllers\Cart\ClearController::class)->name('cart.clear');
Route::get('/cart/get-cart', \App\Http\Controllers\Cart\ShowController::class)->name('cart.show');
Route::patch('/cart/update-cart', \App\Http\Controllers\Cart\UpdateController::class)->name('cart.update');

Route::get('/checkout/{order}', \App\Http\Controllers\Checkout\IndexController::class)->name('checkout.index');
Route::post('/checkout', \App\Http\Controllers\Checkout\StoreController::class)->name('checkout.store');


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
    Route::get('/', \App\Http\Controllers\Admin\IndexController::class)->name('admin');

    Route::group(['prefix' => 'categories'], function (){
        Route::get('/', \App\Http\Controllers\Category\Admin\IndexController::class)->name('admin.category.index');
        Route::get('/create', \App\Http\Controllers\Category\Admin\CreateController::class)->name('category.create');
        Route::post('/', \App\Http\Controllers\Category\Admin\StoreController::class)->name('category.store');
        Route::get('/edit/{category}', \App\Http\Controllers\Category\Admin\EditController::class)->name('category.edit');
        Route::get('/{category}', \App\Http\Controllers\Category\Admin\ShowController::class)->name('admin.category.show');
        Route::patch('/{category}', \App\Http\Controllers\Category\Admin\UpdateController::class)->name('category.update');
        Route::delete('/{category}', \App\Http\Controllers\Category\Admin\DeleteController::class)->name('category.delete');
    });

    Route::group(['prefix' => 'brands'], function (){
        Route::get('/', \App\Http\Controllers\Brand\Admin\IndexController::class)->name('admin.brand.index');
        Route::get('/create', \App\Http\Controllers\Brand\Admin\CreateController::class)->name('brand.create');
        Route::post('/', \App\Http\Controllers\Brand\Admin\StoreController::class)->name('brand.store');
        Route::get('/edit/{brand}', \App\Http\Controllers\Brand\Admin\EditController::class)->name('brand.edit');
        Route::get('/{brand}', \App\Http\Controllers\Brand\Admin\ShowController::class)->name('admin.brand.show');
        Route::patch('/{brand}', \App\Http\Controllers\Brand\Admin\UpdateController::class)->name('brand.update');
        Route::delete('/{brand}', \App\Http\Controllers\Brand\Admin\DeleteController::class)->name('brand.delete');
    });

    Route::group(['prefix' => 'products'], function (){
        Route::get('/', \App\Http\Controllers\Product\Admin\IndexController::class)->name('admin.product.index');
        Route::get('/create', \App\Http\Controllers\Product\Admin\CreateController::class)->name('product.create');
        Route::post('/', \App\Http\Controllers\Product\Admin\StoreController::class)->name('product.store');
        Route::get('/edit/{product}', \App\Http\Controllers\Product\Admin\EditController::class)->name('product.edit');
        Route::get('/{product}', \App\Http\Controllers\Product\Admin\ShowController::class)->name('admin.product.show');
        Route::patch('/{product}', \App\Http\Controllers\Product\Admin\UpdateController::class)->name('product.update');
        Route::delete('/{product}', \App\Http\Controllers\Product\Admin\DeleteController::class)->name('product.delete');
    });
})->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';
