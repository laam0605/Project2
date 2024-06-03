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
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminStatsController;

Route::get('/test', [CartController::class, "test"]);

Route::get('/', function () {
    return redirect('/ClientIndex');
});


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
    Route::get('/order-list', [AdminOrderController::class, "getAll"]);
    Route::get('/order-list/{status}', [AdminOrderController::class, "filter"]);
    Route::get('/order-update-status/{id}/{status}', [AdminOrderController::class, "ordersUpdateStatus"]);

// ADMIN STATS
    Route::get('/stats', [AdminStatsController::class, "statistics"]);
});


// CLIENT CART MIDDLEWARE
Route::get('/cart', [CartController::class, "cart"])->name('cart');

Route::middleware(['cart'])->group(function () {

Route::get('/add-to-cart/{id}/{quantity}', [CartController::class, "addToCart"])->name('addToCart');
Route::get('/cartRemove/{id}/{quantity}', [CartController::class, "cartRemove"]);
Route::get('/cartRemoveAll', [CartController::class, "cartRemoveAll"]);
Route::get('/cart/update/{type}/{id}/{quantity}', [CartController::class, "cartUpdate"]);
Route::get('/checkout', [CartController::class, "checkout"]);
Route::post('/cart/checkout', [CartController::class, "cartCheckout"]);

});

// CLIENT LOGIN & REGISTER
Route::get('/login', [UserController::class, "login"]);
Route::post('/login', [UserController::class, "postLogin"]);
Route::get('/register', [UserController::class, "register"]);
Route::post('/register', [UserController::class, "postRegister"]);
Route::get('/logout', [UserController::class, "logout"]);



require  __DIR__. '/web_client.php';



