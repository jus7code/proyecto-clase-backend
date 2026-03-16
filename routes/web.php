<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\product;
use Illuminate\Support\Facades\Route;

Route::get('/',HomeController::class);
Route::prefix('/product')->controller(ProductController::class)->group(function(){
    Route::get('/', 'index')->name('product.index');
    Route::get('/create', 'create')->name('product.create');
    Route::get('/cart', 'cart')->name('cart.index');
    Route::post('/store', 'store')->name('product.store');
    Route::post('/{id}/cart/add', 'addToCart')->name('cart.add');
    Route::delete('/{id}/cart/remove', 'removeFromCart')->name('cart.remove');
    Route::delete('/{product}', 'destroy')->name('product.destroy');
    Route::get('/{id}', 'show')->name('product.show');
});
Route::prefix('/admin')->controller(AdminController::class)->group(function () {
    Route::get('/', 'index')->name('admin.index');
    Route::get('/products', 'products')->name('admin.products');
    Route::delete('/products/{product}', 'destroy')->name('admin.products.destroy');
});
