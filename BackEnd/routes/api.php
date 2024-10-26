<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;



// Route::get('/', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


//get products with category_id
Route::get('/customers/products/{category_id}', [ProductController::class, 'index']);

//get user acc
// Route::get('/customers', [UserController::class, 'index']);
//get user acc with id
Route::get('/customers/{id}', [UserController::class, 'show']);
// Route::post('/customers/login',[UserController::class,'login']);


    
    Route::get('/logout', [UserController::class, 'logout']);

Route::get('/customers/home/{username}', [UserController::class, 'getUserLogin']);

Route::middleware(['guest'])->group(function () {
    Route::post('/admin/login', [AdminController::class, 'login']);
    Route::post('/customers/login', [UserController::class, 'login']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
});

    