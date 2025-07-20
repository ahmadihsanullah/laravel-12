<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class AccountController extends Controller
{
   public function index()
   {
    $data = [
        [
            "name" => "Asma",
            "balance" => 5000000
        ],
        [
            "name" => "Ahmad",
            "balance" => 1000000
        ]
        ];

        return response()->json([
            "data" => $data
        ]);
   }
}
