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
    route::get('/product/create',function (){
        return view('product.product');
    });
 

    Route::post('product/create',[App\Http\Controllers\productController::class,'store']);
    Route::get('product/index',[App\Http\Controllers\productController::class,'index']);
    Route::get('product/update/{id}',[App\Http\Controllers\productController::class,'edit']);
    Route::post('product/update/{id}',[App\Http\Controllers\productController::class,'update']);
    // // Route::get('product/index',[App\Http\Controllers\productController::class,'destroy']);
    
    Route::get('delete-records',[App\Http\Controllers\productController::class,'index']);
    Route::get('product/delete/{id}',[App\Http\Controllers\productController::class,'delete']);

