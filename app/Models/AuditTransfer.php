<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditTransfer extends Model
{
    protected $fillable = [
        'customer_id',
        'ip_address',
        'address',
        'amount',
    ];
}
