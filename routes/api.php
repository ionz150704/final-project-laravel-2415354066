<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\CustomerController;


Route::apiResource("customers", CustomerController::class);
Route::apiResource('services', ServiceController::class);

Route::patch('service/{service}/activate', [
    ServiceController::class, 
    "activate"
]);

Route::patch('service/{service}/deactivate', [
    ServiceController::class, 
    "deactivate"
]);