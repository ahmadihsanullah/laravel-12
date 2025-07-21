<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransferLedger extends Model
{
    protected $fillable = [
        'customer_id',
        'src_account',
        'dst_account',
        'amount',
        'tran_type'
    ];
}
