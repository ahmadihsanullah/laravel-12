<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MacroController extends Controller
{
    public function index()
    {
        return response()->json([
            'data 1' => Str::ahmad("ahmad"),
            'data 2' => Str::other()
        ]);
    }
}
