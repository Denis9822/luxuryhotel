<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\InspirationController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\LocalizationController;
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
Route::middleware('check.country')->group(function() {
    Route::get('/', [MainController::class, 'index'])->name('main.index');
    Route::get('/inspirations', [InspirationController::class, 'index'])->name('inspirations.index');
    Route::get('/inspirations/{id}', [InspirationController::class, 'show'])->name('inspirations.show');
    Route::get('/hotel', [HotelController::class, 'index'])->name('hotel.show');
    Route::get('/set-currency/{name}', [CurrencyController::class, 'set'])->name('currency.set');
    Route::get('/set-localization/{name}', [LocalizationController::class, 'set'])->name('localization.set');
});
