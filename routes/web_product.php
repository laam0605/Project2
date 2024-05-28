<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientIndexController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;


Route::get('/admin/product-list', [ProductController::class, "getAll"]);
Route::get('/admin/product-delete/{id}', [ProductController::class, "delete"]);
Route::get('/admin/product-edit/{id}', [ProductController::class, "edit"]);
Route::get('/admin/product-add', [ProductController::class, "add"]);
Route::post('/admin/product-save', [ProductController::class, "save"]);
Route::post("/admin/product-update/{id}", [ProductController::class, "update"]);
Route::get("/admin/product-search", [ProductController::class, "productSearch"]);

Route::get('/client-product-details', [ProductController::class, "clientProductDetails"]);



