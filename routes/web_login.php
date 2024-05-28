<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientIndexController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get("/auth-login",[AuthController::class,"login"]);
Route::get("/logout",[AuthController::class,"logout"]);
Route::post("/loginPost",[AuthController::class,"loginPost"]);


Route::get("/register",[AuthController::class,"register"]);
Route::post("/registerPost",[AuthController::class,"registerPost"]);

Route::get("/change-password",[AuthController::class,"changePassword"]);
Route::post("/change-password-post",[AuthController::class,"changePasswordPost"]);

