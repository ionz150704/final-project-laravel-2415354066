<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Api\ServiceController;

Route::apiResource('services', ServiceController::class);

Route::patch('service/{service}/activate', [
    ServiceController::class, 
    "activate"
]);

Route::patch('service/{service}/deactivate', [
    ServiceController::class, 
    "deactivate"
]);