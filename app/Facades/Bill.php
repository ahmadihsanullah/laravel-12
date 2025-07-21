<?php
namespace App\Facades;

use App\Service\BillService;
use Illuminate\Support\Facades\Facade;

class Bill extends Facade
{
    protected static function getFacadeAccessor() { 
        return BillService::class; 
    }

}