<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productControllder;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/use App\Http\Controllers\productControllderController;


Route::get('/product/create', function () {
    return view('product/create');
});
Route::post('/product/create',
[productControllder::class,'store']);


 
Route::get('/product/index',[productControllder::class,'index']);


Route::post('/product/update/{id}',[productControllder::class,'update']);

Route::get('/product/update/{id}',[productControllder::class,'edit']);



