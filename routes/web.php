<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\product;
use Illuminate\Support\Facades\Route;

Route::get('/',HomeController::class);
Route::prefix('/product')->controller(ProductController::class) ->group(function(){
Route::get('/','index')->name('product.index');
Route::get('/create','create');
Route::get('/{id}','show');
route::post('/store','store')->name('product.store');
Route::delete('/{product}','destroy')->name('product.destroy'); 

});

