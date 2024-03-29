<?php

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
    return view('welcome');
});
Route::get('/products',[App\Http\Controllers\ProductController::class,
    'products'])->name('products');

Route::get('/product/{id}',[\App\Http\Controllers\ProductController::class,
    'product'])->name('product.id');
Route::get('search',[\App\Http\Controllers\ProductController::class,'search'])
->name('search');

Route::get('/api/product/{id}',[\App\Http\Controllers\ProductController::class,'jsonProduct']);

Route::group(['namespace'=>'api','middleware'=>'pass-check'],function (){
    Route::get('/api/process', [\App\Http\Controllers\StringController::class, 'process']);

    Route::get('/api/count',[\App\Http\Controllers\StringController::class,'count']);
});

