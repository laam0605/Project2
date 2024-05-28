<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientIndexController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
//use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;

//Route::get('/', [ClientIndexController::class, "clientIndex"]);

Route::get('/add-to-cart/{id}/{quantity}', [CartController::class, "addToCart"]);
Route::get('/cart', [CartController::class, "cart"]);
Route::get('/showcart', [CartController::class, "showCart"]);
Route::get('/cartRemove/{id}', [CartController::class, "cartRemove"]);
Route::get('/cart/update/{type}/{id}/{quantity}', [CartController::class, "cartUpdate"]);
Route::post('/cart/checkout', [CartController::class, "cartCheckout"]);


// ADMIN
Route::get('/admin/index', [AdminIndexController::class, "adminIndex"]);
Route::get('/Admin-User-Account', [UserController::class, "getAll"]);
Route::get('/AdminUser-delete/{id}', [UserController::class, "delete"]);

// ADMIN CATEGORY
Route::get('/admin/category-list', [AdminCategoryController::class, "getAll"]);
Route::get('/admin/category-delete/{id}', [AdminCategoryController::class, "delete"]);
Route::get('/admin/category-add', [AdminCategoryController::class, "add"]);
Route::post('/admin/category-save', [AdminCategoryController::class, "save"]);
Route::get('/admin/category-edit/{id}', [AdminCategoryController::class, "edit"]);
Route::post("/admin/category-update/{id}", [AdminCategoryController::class, "update"]);
Route::get("/admin/category-search", [AdminCategoryController::class, "categorySearch"]);

// ADMIN PRODUCT
Route::get('/admin/product-list', [AdminProductController::class, "getAll"]);
Route::get('/admin/product-delete/{id}', [AdminProductController::class, "delete"]);
Route::get('/admin/product-add', [AdminProductController::class, "add"]);
Route::post('/admin/product-save', [AdminProductController::class, "save"]);
Route::get('/admin/product-edit/{id}', [AdminProductController::class, "edit"]);
Route::post("/admin/product-update/{id}", [AdminProductController::class, "update"]);
Route::get('/admin/product-details/{id}', [AdminProductController::class, "details"]);
Route::get("/admin/product-search", [AdminProductController::class, "productSearch"]);

// ADMIN ORDER

// ADMIN STATS

require  __DIR__. '/web_login.php';

require  __DIR__. '/web_client.php';



