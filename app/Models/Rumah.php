<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    protected $table = 'rumah';

    use HasFactory;

    protected $guarded = [];

    protected $hidden = ['created_at'];

    protected $appends = ['deskripsi'];

    public function getDeskripsiAttribute()
    {
        return $this->warna . ' ' . $this->ukuran . ' ' . $this->harga;
    }
}
