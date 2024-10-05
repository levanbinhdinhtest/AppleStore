<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//get products with category_id
Route::get('/customers/products/{category_id}', [ProductController::class, 'index']);

//get user acc
Route::get('/customers', [UserController::class, 'index']);
//get user acc with id
Route::get('/customers/{id}', [UserController::class, 'show']);