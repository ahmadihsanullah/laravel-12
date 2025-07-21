<?php

namespace App\Listeners;

use App\Events\TransferExecuted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TransferExecuted $event): void
    {
        $ledger = $event->getLedger();
        \App\Models\SendNotification::create([
            'customer_id' => $ledger->customer_id,
            'title' => "Transfer Success",
            'message' => "Transfer From ".$ledger->src_account." To ".$ledger->dst_account." Success",
            'is_read' => false
        ]);
    }
}
