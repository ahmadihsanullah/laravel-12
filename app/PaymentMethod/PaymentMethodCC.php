<?php

namespace App\PaymentMethod;

class PaymentMethodCC implements PaymentMethod {

    public function inquiry() {
        return 'Credit Card Inquiry';
    }

    public function payment() {
        return 'Credit Card Payment';
    }
}