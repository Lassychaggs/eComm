<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});
Route::view('/register', 'register');
Route::get('/logout',[UserController::class, 'logout']);
Route::post('/login',[UserController::class, 'login']);
Route::get('/',[ProductController::class, 'index']);
Route::get('/productdetail/{id}',[ProductController::class, 'detail']);
Route::get('/search',[ProductController::class, 'search']);
Route::post('/addcart',[ProductController::class, 'addCart']);
Route::get('/viewcart',[ProductController::class, 'viewCart']);
Route::get('/removecart/{id}',[ProductController::class, 'removeCart']);
Route::get('/ordernow',[ProductController::class, 'orderNow']);
Route::post('/orderconfirm',[ProductController::class, 'orderConfirm']);
Route::get('/myorders',[ProductController::class, 'myOrders']);


