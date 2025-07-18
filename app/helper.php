<?php

function rupiah($number) {

    // return biasa
    // return "Rp " . number_format($number, 2, ',', '.'); \
    
    // return service
    $data = app(App\Service\ContohService::class);
    return $data->contoh();
}