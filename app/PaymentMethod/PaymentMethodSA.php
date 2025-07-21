<?php

namespace App\PaymentMethod;

class PaymentMethodSA implements PaymentMethod {

    public function inquiry() {
        return 'SA Inquiry';
    }

    public function payment() {
        return 'SA Payment';
    }
}