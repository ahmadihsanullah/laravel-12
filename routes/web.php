<?php

use App\Http\Controllers\LaptopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return rupiah(50000);
    return view('welcome');
});


Route::get('/laptop',[LaptopController::class, 'index']);