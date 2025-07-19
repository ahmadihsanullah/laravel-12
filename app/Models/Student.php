<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['first_name', 'last_name', 'gender', 'full_name'];
    protected $appends = [
        'full_name'
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function setFullNameAttribute($value)
    {
        $names = explode(" ", $value);

        if(count($names) > 1) {
            $this->first_name = $names[0];
            $this->last_name = $names[1];
            return;
        }

        $this->first_name = $value;
        $this->last_name = '';
    }

    private function getValueGender($value) 
    {
        if($value == 'M') {
            return 'Male';
        }
        return 'Female';
    }

    private function setValueGender($value) 
    {
        if($value == 'Male') {
            return 'M';
        }
        return 'F';
    }
    public function gender(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->getValueGender($value),
            set: fn($value) => $this->setValueGender($value),
        );
    }
}
