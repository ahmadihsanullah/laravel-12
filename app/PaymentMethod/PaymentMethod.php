<?php

namespace App\PaymentMethod;

interface PaymentMethod {
    function inquiry();
    function payment();
}