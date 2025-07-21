<?php

namespace App\Http\Controllers;

use App\Facades\Bill;
use App\Service\BillService;
use App\Service\DrinkBill;
use App\Service\FoodBill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    // public function index(BillService $billService, FoodBill $foodBill, DrinkBill $drinkBill) {
    //     $billService->bill();
    //     $foodBill->bill();
    //     $drinkBill->bill();
    // }

    public function bill(DrinkBill $drinkBill)
    {
        return Bill::bill() .' - '.$drinkBill->bill();
    }
}
