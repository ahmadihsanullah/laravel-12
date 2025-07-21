<?php

namespace App\Listeners;

use App\Events\Transferexecuted;
use App\Models\AuditTransfer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AuditListener
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
    public function handle(Transferexecuted $event): void
    {
        $ledger = $event->getLedger();
        AuditTransfer::create([
            'customer_id' => $ledger->customer_id,
            'ip_address' => request()->ip(),
            'address' => request()->header('X-LOCATION'),
            'amount' => $ledger->amount
        ]);
    }
}
