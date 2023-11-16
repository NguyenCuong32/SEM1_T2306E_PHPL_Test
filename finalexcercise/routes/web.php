<?php

use App\Http\Controllers\ProductController;
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

Route::get('/product/', function(){
    return view('products/create');
});

Route::get('/', function () {
    return view('products.index');
});

Route::get('/products/index', [ProductController::class,'index']);

Route::post('/product/create', [ProductController::class,'store']);

Route::get('/products/update/{id}', [ProductController::class,'edit']);

Route::post('/products/update/{id}', [ProductController::class,'update']);
