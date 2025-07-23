<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $fillable = ['title',  'photo'];

   // accessor untuk mengembalikan full URL gambar
    protected $appends = ['photo_url'];

    public function getPhotoUrlAttribute()
    {
        return $this->photo 
            ? Storage::url($this->photo) 
            : null;
    }
}
