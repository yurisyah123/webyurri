<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/auth',[UserController::class,'auth']);
Route::get('/user',[UserController::class,'user']);
Route::get('/user/show/{id}',[UserController::class,'show'])->name('user.show');
Route::get('/keranjang',[UserController::class,'keranjang']);
Route::get('/product',[UserController::class,'product']);
Route::get('/checkout',[UserController::class,'checkout']);
// Route::get('/checkout{id}',[UserController::class,'detailproduct']);
Route::get('/detailproduct',[ProductController::class,'detailproduk']);
Route::get('/berhasil',[UserController::class,'berhasil']);

 Route::get('/logout',[UserController::class,'logout']);
