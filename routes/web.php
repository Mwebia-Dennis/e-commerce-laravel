<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/login', [PagesController::class, 'loginPage']);
Route::get('/product_details/{id}', [PagesController::class, 'productDetails']);
Route::get('/search_page', [PagesController::class, 'searchProduct']);
Route::post('/login', [UserController::class, 'loginUser']);
Route::post('/addToCart', [ProductsController::class, 'addToCart']);
