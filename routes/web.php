<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\InspirationController;
use App\Http\Controllers\HotelController;
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

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/inspirations', [InspirationController::class, 'index'])->name('inspirations.index');
Route::get('/inspirations/{id}', [InspirationController::class, 'show'])->name('inspirations.show');
Route::get('/hotel', [HotelController::class, 'index'])->name('hotel.show');
