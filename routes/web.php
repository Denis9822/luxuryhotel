<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\InspirationController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\TextController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\CityController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\LangController;
use App\Http\Controllers\admin\TranslationController;
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
    Route::match(['post','get'],'/login', [MainController::class, 'login'])->name('login');
    Route::get('/inspirations', [InspirationController::class, 'index'])->name('inspirations.index');
    Route::get('/inspirations/{name}/{page?}', [InspirationController::class, 'show'])->name('inspirations.show');
    Route::get('/hotel', [HotelController::class, 'index'])->name('hotel.show');
    Route::get('/hotel-search', [HotelController::class, 'search'])->name('hotel.search');
    Route::get('/hotel-paginate', [HotelController::class, 'paginate'])->name('hotel.paginate');
    Route::get('/set-currency/{name}', [CurrencyController::class, 'set'])->name('currency.set');
    Route::get('/set-localization/{name}', [LocalizationController::class, 'set'])->name('localization.set');
    Route::get('/about-us', [MainController::class, 'about_us'])->name('page.about_us');
    Route::get('/contacts', [MainController::class, 'contacts'])->name('page.contacts');
    Route::get('/privacy-police', [MainController::class, 'privacy'])->name('page.privacy');
});

Route::middleware('check.admin')->group(function() {
    Route::post('admin/adminexit', [AdminController::class, 'adminexit'])->name('adminexit');
    Route::get('admin/admin', [AdminController::class, 'admin_admin'])->name('admin_admin');
    Route::match(['post','get'],'admin/admin/add', [AdminController::class, 'admin_add'])->name('admin_add');
    Route::match(['post','get'],'admin/admin/{id}/edit', [AdminController::class, 'admin_edit'])->name('admin_edit');
    Route::match(['post','get'],'admin/admin/{id}/remove', [AdminController::class, 'admin_remove'])->name('admin_remove');
    Route::match(['post','get'],'admin/text', [\App\Http\Controllers\admin\TextController::class, 'text'])->name('text');
    Route::match(['post','get'],'admin/text/{id}/edit', [TextController::class, 'text_edit'])->name('text_edit');
    Route::match(['post','get'],'admin/setting', [SettingController::class, 'setting'])->name('setting');

    Route::match(['post','get'],'admin/city', [CityController::class, 'index'])->name('admin.city.index');
    Route::match(['post','get'],'admin/city/add', [CityController::class, 'add'])->name('admin.city.add');
    Route::match(['post','get'],'admin/city/{id}/edit', [CityController::class, 'edit'])->name('admin.city.edit');
    Route::match(['post','get'],'admin/city/{id}/remove', [CityController::class, 'remove'])->name('admin.city.remove');
    Route::match(['post','get'],'admin/page/{id}/edit', [PageController::class, 'edit'])->name('admin.page.edit');
    Route::match(['post','get'],'admin/lang', [LangController::class, 'index'])->name('admin.lang.index');
    Route::match(['post','get'],'admin/lang/{id}/edit', [LangController::class, 'edit'])->name('admin.lang.edit');
    Route::match(['post','get'],'admin/lang/add', [LangController::class, 'add'])->name('admin.lang.add');
    Route::match(['post','get'],'admin/lang/{id}/remove', [LangController::class, 'remove'])->name('admin.lang.remove');
    Route::match(['post','get'],'admin/translation', [TranslationController::class, 'index'])->name('admin.translation.index');
    Route::match(['post','get'],'admin/translation/add', [TranslationController::class, 'add'])->name('admin.translation.add');
    Route::match(['post','get'],'admin/translation/{id}/edit', [TranslationController::class, 'edit'])->name('admin.translation.edit');
});
