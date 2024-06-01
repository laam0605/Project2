<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientIndexController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
//use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;



Route::get('/', function () {
    return redirect('/ClientIndex');
});

Route::get('/add-to-cart/{id}/{quantity}', [CartController::class, "addToCart"]);
Route::get('/cart', [CartController::class, "cart"]);
Route::get('/cartRemove/{id}', [CartController::class, "cartRemove"]);
Route::get('/cart/update/{type}/{id}/{quantity}', [CartController::class, "cartUpdate"]);
Route::post('/cart/checkout', [CartController::class, "cartCheckout"]);


// ADMIN MIDDLEWARE
Route::get('/logon', [AdminController::class, "logon"]);
Route::post('/logon', [AdminController::class, "postLogon"]);
Route::get('/signout', [AdminController::class, "signOut"]);

Route::prefix('admin')->middleware('admin')->group(function(){
// ADMIN
    Route::get('/', [AdminIndexController::class, "adminIndex"]);

// ADMIN CATEGORY
    Route::get('/category-list', [AdminCategoryController::class, "getAll"]);
    Route::get('/category-delete/{id}', [AdminCategoryController::class, "delete"]);
    Route::get('/category-add', [AdminCategoryController::class, "add"]);
    Route::post('/category-save', [AdminCategoryController::class, "save"]);
    Route::get('/category-edit/{id}', [AdminCategoryController::class, "edit"]);
    Route::post("/category-update/{id}", [AdminCategoryController::class, "update"]);
    Route::get("/category-search", [AdminCategoryController::class, "categorySearch"]);

// ADMIN PRODUCT
    Route::get('/product-list', [AdminProductController::class, "getAll"]);
    Route::get('/product-delete/{id}', [AdminProductController::class, "delete"]);
    Route::get('/product-add', [AdminProductController::class, "add"]);
    Route::post('/product-save', [AdminProductController::class, "save"]);
    Route::get('/product-edit/{id}', [AdminProductController::class, "edit"]);
    Route::post("/product-update/{id}", [AdminProductController::class, "update"]);
    Route::get('/product-details/{id}', [AdminProductController::class, "details"]);
    Route::get("/product-search", [AdminProductController::class, "productSearch"]);

// ADMIN ORDER
    Route::get('/order-list', [OrderController::class, "getAll"]);
    Route::get('/orders-update-status/{id}/{status}', [OrderController::class, "ordersUpdateStatus"]);

// ADMIN STATS

});


// CLIENT MIDDLEWARE
Route::get('/login', [UserController::class, "login"]);
Route::post('/login', [UserController::class, "postLogin"]);
Route::get('/register', [UserController::class, "register"]);
Route::post('/register', [UserController::class, "postRegister"]);
Route::get('/logout', [UserController::class, "logout"]);





require  __DIR__. '/web_client.php';



