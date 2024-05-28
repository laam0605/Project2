<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientIndexController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;


Route::get('/ClientIndex', [ClientIndexController::class, "clientIndex"]);
Route::get('/contact', [ClientIndexController::class, "contact"]);
Route::get('/about-us', [ClientIndexController::class, "aboutUs"]);
Route::get('/feedback', [ClientIndexController::class, "feedBack"]);
Route::get('/search', [ClientIndexController::class, "search"]);
Route::get("/product-details/{id}", [ClientIndexController::class, "productDetails"]);
Route::get('/checkout', [ClientIndexController::class, "checkout"]);



