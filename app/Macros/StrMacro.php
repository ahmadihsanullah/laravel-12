<?php
namespace App\Macros;

use Illuminate\Support\Str;

class StrMacro
{
    public function ahmad()
    {
        return function($name) {
            return "Hello from ".$name;
        };
    }

    public function other()
    {
        return function() {
            return "Hello from other";
        };
    }
}