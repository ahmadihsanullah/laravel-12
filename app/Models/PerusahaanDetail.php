<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerusahaanDetail extends Model
{
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }

    protected $hidden = [
        'created_at'
    ];
}
