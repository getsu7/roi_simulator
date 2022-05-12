<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolarIrradianceController;


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
Route::get('/list/create', [SolarIrradianceController::class, 'create']);

// List all solar irradiance data
Route::get('/list', [SolarIrradianceController::class, 'list']);

// Store new solar irradiance data
Route::post('/list', [SolarIrradianceController::class, 'store']);

// List Single solar irradiance data
Route::get('/list/{solarIrradiance}', [SolarIrradianceController::class, 'show']);


