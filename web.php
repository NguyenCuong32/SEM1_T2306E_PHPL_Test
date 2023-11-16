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


route::get('/products/create',function (){
    return view('product.create'); 
    });
    Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    Route::post('products/create',[App\Http\Controllers\ProductController::class,'store']);
    Route::get('products/index',[App\Http\Controllers\ProductController::class,'index']);
    Route::get('products/update/{id}',[App\Http\Controllers\ProductController::class,'edit']);
    Route::post('products/update/{id}',[App\Http\Controllers\ProductController::class,'update']);
?>

