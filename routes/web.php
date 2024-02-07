<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CarController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/token', function () {
    return csrf_token(); 
});

Route::get('/api/cars', [CarController::class, 'getCarData']);
Route::get('/api/cars/{id}', [CarController::class, 'findCar']);
Route::put('/api/cars/{id}', [CarController::class, 'updateCar']);
Route::delete('/api/cars/{id}', [CarController::class, 'deleteCar']);





