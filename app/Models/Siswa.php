<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Siswa extends Model
{
    protected $guarded = [];
    protected $keyType = 'string';
    public $incrementing = false;
     protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if($model->getKey() == null)
                $model->setAttribute($model->getKeyName(), Str::uuid()->tostring());
        });
    }
}
