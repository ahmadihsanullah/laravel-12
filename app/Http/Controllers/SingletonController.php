<?php

namespace App\Http\Controllers;

use App\PaymentMethod\PaymentMethod;
use Illuminate\Http\Request;

class SingletonController extends Controller
{
    public function index(PaymentMethod $paymentMethod)
    {
        return $paymentMethod->payment();
    }
}
