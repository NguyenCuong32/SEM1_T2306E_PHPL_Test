<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('products.create');//thu muc view/students/create.blade.php
});


Route::post('product/create',[App\Http\Controllers\ProductController::class,'store']);
// Route::post('product/create',[productController::class,'index']);
Route::get('product/index',[App\Http\Controllers\ProductController::class,'index']);
Route::get('product/update/{id}',[App\Http\Controllers\ProductController::class,'edit']);
Route::post('product/update/{id}',[App\Http\Controllers\ProductController::class,'update']);
Route::get('product/delete/{id}',[App\Http\Controllers\ProductController::class,'destroy']);
Route::get('/product/report', [ProductController::class, 'generateReport'])->name('product.report');



// Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
// Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
// Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
// Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
// Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
// Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
