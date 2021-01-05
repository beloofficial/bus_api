<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\RouteController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('ru/')->group(function () {

    Route::prefix('users')->group(function () {
        Route::get('/',[UserController::class, 'index']);
        Route::post('/',[UserController::class, 'store']);
        Route::put('/{user}',[UserController::class, 'update']);
        Route::delete('/{user}',[UserController::class, 'destroy']);
    });
    
    Route::prefix('buses')->group(function () {
        Route::get('/',[BusController::class, 'index']);
        Route::post('/',[BusController::class, 'store']);
        Route::put('/{bus}',[BusController::class, 'update']);
        Route::delete('/{bus}',[BusController::class, 'destroy']);
    });

    Route::prefix('cities')->group(function () {
        Route::get('/',[CityController::class, 'index']);
        Route::post('/',[CityController::class, 'store']);
        Route::put('/{city}',[CityController::class, 'update']);
        Route::delete('/{city}',[CityController::class, 'destroy']);
    });

    Route::prefix('routes')->group(function () {
        Route::get('/search',[RouteController::class, 'search']);
        Route::post('/',[RouteController::class, 'store']);
        Route::put('/{route}',[RouteController::class, 'update']);
        Route::delete('/{route}',[RouteController::class, 'destroy']);
    });


});
