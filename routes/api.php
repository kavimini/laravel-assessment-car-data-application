<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api/cars', [CarController::class, 'getCarData']);
Route::get('/api/cars/{id}', [CarController::class, 'findCar']);
Route::put('/api/cars/{id}', [CarController::class, 'updateCar']);
Route::delete('/api/cars/{id}', [CarController::class, 'deleteCar']);


