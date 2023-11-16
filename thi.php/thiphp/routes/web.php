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

Route::get('/', [ProductController::class,'index'])->name('index');
Route::get('/', [ProductController::class,'index'])->name('create');
Route::get('/', [ProductController::class,'index'])->name('add');
Route::get('/', [ProductController::class,'index'])->name('edit');
Route::get('/', [ProductController::class,'index'])->name('update');
Route::get('/', [ProductController::class,'index'])->name('repost');
