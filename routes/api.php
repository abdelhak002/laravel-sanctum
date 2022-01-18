<?php

use App\Http\Controllers\Api\v1\ProductController;
use App\Http\Controllers\Api\v1\UserController;
use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register-shop', [ShopController::class, 'store']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::post('/logout', [UserController::class, 'logout']);
    Route::apiResource('products', ProductController::class);
});
Route::get('/product/search/{name}', [ProductController::class, 'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
