<?php

use App\Http\Controllers\serviceController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\handleRegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;


Route::get('/add-service',[serviceController::class,'getServicesData']);
Route::get('/register',[registerController::class,'registerStd']);
Route::post('/handle-register',[handleRegisterController::class,'registerStudent']);
Route::get('/student/profile',[profileController::class,'myfun'])->name('profile');
// products
Route::get('/', [ProductController::class,'index'])->name('products.index');
Route::get('/create', [ProductController::class,'create'])->name('products.create');
Route::Post('/products/store',[ProductController::class,'store'])->name('products.store');
Route::get('/products/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::put('/products/{id}/update',[ProductController::class,'update'])->name('products.update');
Route::get('/products/{id}/delete',[ProductController::class,'destroy'])->name('products.destroy');