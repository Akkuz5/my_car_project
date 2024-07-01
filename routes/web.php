<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/models/{brand_id}', [CarController::class, 'getModelsByBrand'])->name('models.byBrand');

Route::resource('cars', CarController::class);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
    Route::get('/models', [ModelController::class, 'index'])->name('models.index');
    Route::resource('cars', CarController::class);
});
