<?php

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/country', [CountryController::class, 'index'])->middleware(['auth'])->name('country');

Route::post('/country', [CountryController::class, 'store'])->middleware(['auth'])->name('country.store');

Route::get('/country/create', [CountryController::class, 'create'])->middleware(['auth'])->name('country.create');

Route::get('/country/{country}', [CountryController::class, 'show'])->middleware(['auth'])->name('country.show');

Route::put('/country/{country}', [CountryController::class, 'update'])->middleware(['auth'])->name('country.update');

Route::get('/country/{country}/edit', [CountryController::class, 'edit'])->middleware(['auth'])->name('country.edit');


require __DIR__.'/auth.php';
