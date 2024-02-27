<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientIndexController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\CategoryController;

Route::get('/', [ClientIndexController::class, "clientIndex"]);

Route::get('/admin/index', [AdminIndexController::class, "adminIndex"]);
Route::get('/admin/category-list', [CategoryController::class, "getAll"]);
