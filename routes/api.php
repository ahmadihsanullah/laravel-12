<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\TokenController;
use App\Http\Controllers\Api\User\IndexController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MacroController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\SingletonController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

Route::apiResource('rumah', RumahController::class);

Route::get('perusahaan/{id}', [PerusahaanController::class, 'perusahaan']);
Route::get('perusahaan/detail/{id}', [PerusahaanController::class, 'detail']);
Route::get('perusahaan/brand/{id}', [PerusahaanController::class, 'brand']);

Route::get('book', [BookController::class, 'index']);

Route::get('students', [StudentController::class, 'index']);
Route::post('student', [StudentController::class, 'store']);

Route::post('siswa', [SiswaController::class, 'store']);

// api sanctum
Route::post('token/create', [TokenController::class, 'create']);
Route::get("account", [AccountController::class, 'index'])->middleware(['auth:sanctum',
    'ability:account-list, account-view'
]);

// dependency injection / singleton
Route::get('payment', [SingletonController::class, 'index']);

// facades
Route::get('bill', [BillController::class, 'bill']);

// macroable
Route::get('macro', [MacroController::class, 'index']);

// event-listener
Route::post('transfer', TransferController::class);

// upload foto
Route::post('save', [PostController::class, 'upload']);
Route::get('/posts/{post}', [PostController::class, 'show']);


// file system
Route::get('file', [FileController::class, 'index']);

// cursor paginate
Route::get('users', IndexController::class);