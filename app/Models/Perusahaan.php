<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    public function detail()
    {
        return $this->hasOne(PerusahaanDetail::class);
    }

    public function brand() 
    {
        return $this->hasMany(Brand::class);
    }

    protected $hidden = [
        'created_at'
    ];
}
