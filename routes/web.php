<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolarIrradianceController;
use App\Http\Controllers\CityController;


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

// Show form to create new solar irradiance data
Route::get('/irradiance/create', [SolarIrradianceController::class, 'create']);

// List all solar irradiance data
Route::get('/irradiance', [SolarIrradianceController::class, 'index']);

// Store new solar irradiance data
Route::post('/irradiance', [SolarIrradianceController::class, 'store']);

// List Single solar irradiance data
Route::get('/irradiance/{solarIrradiance}', [SolarIrradianceController::class, 'show']);

// Show form to create new city
Route::get('/city/create', [CityController::class, 'create']);

// List all cities
Route::get('/city', [CityController::class, 'index']);

// Store a new city
Route::post('/city', [CityController::class, 'store']);

// Show single city
Route::get('/city/{city}', [CityController::class, 'show']);

// Show form to edit city
Route::get('/city/{city}/edit', [CityController::class, 'edit']);

// Update city
Route::put('/city/{city}', [CityController::class, 'update']);

// Delete city
Route::delete('/city/{city}', [CityController::class, 'destroy']);



