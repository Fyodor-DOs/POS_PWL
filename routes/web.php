<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sales', [SalesController::class, 'index'])->name('sales');
Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user');
Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage'])->name('food-beverage');
Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth'])->name('beauty-health');
Route::get('/category/home-care', [ProductController::class, 'homeCare'])->name('home-care');
Route::get('/category/baby-kid', [ProductController::class, 'babyKid'])->name('baby-kid');
