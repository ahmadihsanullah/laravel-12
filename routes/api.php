<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\RumahController;
use Illuminate\Support\Facades\Route;

Route::apiResource('rumah', RumahController::class);

Route::get('perusahaan/{id}', [PerusahaanController::class, 'perusahaan']);
Route::get('perusahaan/detail/{id}', [PerusahaanController::class, 'detail']);
Route::get('perusahaan/brand/{id}', [PerusahaanController::class, 'brand']);

Route::get('book', [BookController::class, 'index']);

Route::get('students', [StudentController::class, 'index']);
Route::post('student', [StudentController::class, 'store']);
