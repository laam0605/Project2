<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientIndexController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
//use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

//Route::get('/', [ClientIndexController::class, "clientIndex"]);
Route::get('/admin', [AdminIndexController::class, "adminIndex"]);
Route::get('/Admin-User-Account', [UserController::class, "getAll"]);
Route::get('/AdminUser-delete/{id}', [UserController::class, "delete"]);
Route::get('/add-to-cart/{id}/{quantity}', [CartController::class, "addToCart"]);
Route::get('/cart', [CartController::class, "cart"]);
Route::get('/showcart', [CartController::class, "showCart"]);
Route::get('/cartRemove/{id}', [CartController::class, "cartRemove"]);
Route::get('/cart/update/{type}/{id}/{quantity}', [CartController::class, "cartUpdate"]);
Route::post('/cart/checkout', [CartController::class, "cartCheckout"]);




require __DIR__. '/web_category.php';

require __DIR__. '/web_product.php';

require  __DIR__. '/web_login.php';

require  __DIR__. '/web_client.php';



