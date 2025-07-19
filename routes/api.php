<?php

use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\RumahController;
use Illuminate\Support\Facades\Route;

Route::apiResource('rumah', RumahController::class);

Route::get('perusahaan/{id}', [PerusahaanController::class, 'perusahaan']);
Route::get('perusahaan/detail/{id}', [PerusahaanController::class, 'detail']);
Route::get('perusahaan/brand/{id}', [PerusahaanController::class, 'brand']);
