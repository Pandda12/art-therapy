<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/', function () {
//   return Inertia::render('Home');
//})->name('home');

Route::get('/', \App\Http\Controllers\Home\IndexController::class)->name('home');

Route::get('/info', function () {
    return Inertia::render('Info', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {

    Route::get('/', function (){
        return Inertia::render('Dashboard/Index');
    })->name('dashboard');

    Route::group(['prefix' => 'brands'], function (){
        Route::get('/', \App\Http\Controllers\Brand\Dashboard\IndexController::class)->name('dashboard.brand.index');
        Route::get('/create', \App\Http\Controllers\Brand\Dashboard\CreateController::class)->name('dashboard.brand.create');
        Route::post('/', \App\Http\Controllers\Brand\Dashboard\StoreController::class)->name('dashboard.brand.store');
        Route::get('/edit/{brand_id}', \App\Http\Controllers\Brand\Dashboard\EditController::class)->name('dashboard.brand.edit');
        Route::patch('/{brand}', \App\Http\Controllers\Brand\Dashboard\UpdateController::class)->name('brand.update');
        Route::delete('/{brand}', \App\Http\Controllers\Brand\Dashboard\DestroyController::class)->name('brand.delete');
    });

    Route::group(['prefix' => 'categories'], function (){
        Route::get('/', \App\Http\Controllers\Category\Dashboard\IndexController::class)->name('dashboard.category.index');
        Route::get('/create', \App\Http\Controllers\Category\Dashboard\CreateController::class)->name('dashboard.category.create');
        Route::post('/', \App\Http\Controllers\Category\Dashboard\StoreController::class)->name('dashboard.category.store');
        Route::get('/edit/{category_id}', \App\Http\Controllers\Category\Dashboard\EditController::class)->name('dashboard.category.edit');
        Route::patch('/{category}', \App\Http\Controllers\Category\Dashboard\UpdateController::class)->name('category.update');
        Route::delete('/{category}', \App\Http\Controllers\Category\Dashboard\DestroyController::class)->name('category.delete');
    });

    Route::group(['prefix' => 'products'], function (){
        Route::get('/', \App\Http\Controllers\Product\Dashboard\IndexController::class)->name('dashboard.product.index');
        Route::get('/create', \App\Http\Controllers\Product\Dashboard\CreateController::class)->name('dashboard.product.create');
        Route::post('/', \App\Http\Controllers\Product\Dashboard\StoreController::class)->name('dashboard.product.store');
        Route::get('/edit/{product_id}', \App\Http\Controllers\Product\Dashboard\EditController::class)->name('dashboard.product.edit');
        Route::patch('/{product}', \App\Http\Controllers\Product\Dashboard\UpdateController::class)->name('dashboard.product.update');
        Route::delete('/{product}', \App\Http\Controllers\Product\Dashboard\DestroyController::class)->name('product.delete');
    });

    Route::group(['prefix' => 'stores'], function (){
        Route::get('/', \App\Http\Controllers\Store\Dashboard\IndexController::class)->name('dashboard.store.index');
        Route::get('/create', \App\Http\Controllers\Store\Dashboard\CreateController::class)->name('dashboard.store.create');
        Route::post('/', \App\Http\Controllers\Store\Dashboard\StoreController::class)->name('dashboard.brand.store');
        Route::get('/edit/{store_id}', \App\Http\Controllers\Store\Dashboard\EditController::class)->name('dashboard.store.edit');
        Route::patch('/{store}', \App\Http\Controllers\Store\Dashboard\UpdateController::class)->name('store.update');
        Route::delete('/{store}', \App\Http\Controllers\Store\Dashboard\DestroyController::class)->name('store.delete');
    });

    Route::group(['prefix' => 'orders'], function (){
        Route::get('/', \App\Http\Controllers\Order\Dashboard\IndexController::class)->name('dashboard.order.index');
        Route::get('/edit/{order_id}', \App\Http\Controllers\Order\Dashboard\EditController::class)->name('dashboard.order.edit');
        Route::patch('/{order}', \App\Http\Controllers\Order\Dashboard\UpdateController::class)->name('dashboard.order.update');
        Route::delete('/{order}', \App\Http\Controllers\Order\Dashboard\DestroyController::class)->name('order.delete');
    });

    Route::group(['prefix' => 'users'], function (){
        Route::get('/', \App\Http\Controllers\Users\IndexController::class)->name('user.index');
        Route::get('/create', \App\Http\Controllers\Users\CreateController::class)->name('dashboard.user.create');
//        Route::get('/edit/{order_id}', \App\Http\Controllers\Order\Dashboard\EditController::class)->name('dashboard.order.edit');
//        Route::patch('/{order}', \App\Http\Controllers\Order\Dashboard\UpdateController::class)->name('dashboard.order.update');
//        Route::delete('/{order}', \App\Http\Controllers\Order\Dashboard\DestroyController::class)->name('order.delete');
    });


})->middleware(['auth', 'verified']);

Route::get('/brands', \App\Http\Controllers\Brand\Guest\IndexController::class)->name('brand.index');
Route::get('/brand/{brand_slug}', \App\Http\Controllers\Brand\Guest\ShowController::class)->name('brand.show');

Route::get('/categories', \App\Http\Controllers\Category\Guest\IndexController::class)->name('category.index');
Route::get('/category/{category_slug}', \App\Http\Controllers\Category\Guest\ShowController::class)->name('category.show');

Route::get('/products', \App\Http\Controllers\Product\Guest\IndexController::class)->name('product.index');
Route::get('/product/{product_slug}', \App\Http\Controllers\Product\Guest\ShowController::class)->name('product.show');

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/order', \App\Http\Controllers\Order\Guest\StoreController::class)->name('order.store');
Route::get('/order/order-{order_id}', \App\Http\Controllers\Order\Guest\ShowController::class)->name('order.show');

Route::get('/stores', \App\Http\Controllers\Store\Guest\IndexController::class)->name('store.index');

Route::get('/about-us', function (){
    return Inertia::render('Guest/About/Index');
})->name('about.index');

Route::get('/contact', function (){
    return Inertia::render('Guest/Contact/Index');
})->name('contact.index');

//
//Route::get('/dashboard', function () {
////    return Inertia::render('DashboardOld');
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
