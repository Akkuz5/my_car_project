<?php
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\CarController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('brands', [BrandController::class, 'index']);
    Route::get('models', [ModelController::class, 'index']);
    Route::apiResource('cars', CarController::class);
});
