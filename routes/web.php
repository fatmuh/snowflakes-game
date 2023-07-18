<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingPageController;

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

Route::controller(LandingPageController::class)->name('landing.')->group( function() {
    Route::get('/', 'index')->name('index');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(LandingPageController::class)->name('landing.')->group( function() {
    Route::get('/game/{slug}', 'detail')->name('detail');
    Route::post('/store', 'store')->name('store');
    Route::get('/riwayat-pesanan', 'historyOrder')->name('history-order');
    Route::get('/profil', 'profil')->name('profil');
    Route::put('/profil/update', 'update')->name('update');
    Route::get('/profil/ganti-password', 'changePassword')->name('changePassword');
    Route::post('/profil/ganti-password', 'changePasswordPost')->name('changePassword.post');
});

Route::middleware(['auth','ceklevel:Admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::controller(ProfileController::class)->name('profile.')->group( function() {
        Route::get('/admin/profile', 'index')->name('index');
        Route::put('/admin/profile/update', 'update')->name('update');
        Route::get('/admin/profile/change-password', 'changePassword')->name('changePassword');
        Route::post('/admin/profile/change-password', 'changePasswordPost')->name('changePassword.post');
    });

    Route::controller(GameController::class)->prefix('admin/game')->name('admin.game.')->group( function() {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'delete')->name('delete');
    });

    Route::controller(ProductController::class)->prefix('admin/produk')->name('admin.produk.')->group( function() {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'delete')->name('delete');
    });
});
