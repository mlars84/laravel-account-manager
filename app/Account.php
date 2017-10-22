<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public static function isActive()
    {
        return static::where('active', 1)->get();
    }
}
