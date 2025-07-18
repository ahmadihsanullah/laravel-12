<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return rupiah(50000);
});
