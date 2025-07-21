<?php

namespace App\Http\Controllers;

use App\Events\TransferExecuted;
use App\Models\TransferLedger;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $ledger = TransferLedger::create([
            'customer_id' => $request->customer_id,
            'src_account' => $request->src_account,
            'dst_account' => $request->dst_account,
            'amount' => $request->amount,
            'tran_type' => "OUT"
        ]);

        event(new TransferExecuted($ledger));

        return response()->json([
            'data' => $ledger
        ]);
    }
}
