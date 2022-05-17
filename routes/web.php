<?php

use Illuminate\Support\Facades\Route;
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

// Show create form
Route::get('/country/create', [CountryController::class, 'create'])->middleware(['auth'])->name('country.create');

// List all countries
Route::get('/country', [CountryController::class, 'index'])->middleware(['auth'])->name('country');

// Show single country
Route::get('/country/{country}', [CountryController::class, 'show'])->middleware(['auth'])->name('country.show');

// Store a new country
Route::post('/country', [CountryController::class, 'store'])->middleware(['auth'])->name('country.store');

// Show edit form
Route::get('/country/{country}/edit', [CountryController::class, 'edit'])->middleware(['auth'])->name('country.edit');

// Update country
Route::put('/country/{country}', [CountryController::class, 'update'])->middleware(['auth'])->name('country.update');

// Delete country
Route::delete('/country/{country}', [CountryController::class, 'destroy'])->middleware(['auth'])->name('country.destroy');


require __DIR__.'/auth.php';
