<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productscontrollers;
use App\Http\Controllers\categoriescontrollers;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/products', function () {
//     return view('products');
// });
Route::get('/',[categories::class,'']);
Route::get('/products', [productscontrollers::class,'showAllProducts']);
Route::get('/categories',[categoriescontrollers::class,'showAllCategories']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
