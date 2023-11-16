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
Route::get('product/create',function (){
    return view('products.create');
});
Route::post('product/create',[App\Http\Controllers\ProductController::class,'store']);
Route::get('product/list',[App\Http\Controllers\ProductController::class,'list']);
Route::get('product/update/{id}',[App\Http\Controllers\ProductController::class,'edit']);
Route::post('product/update/{id}',[App\Http\Controllers\ProductController::class,'update']);