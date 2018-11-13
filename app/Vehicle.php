<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function registrations()
    {
        return $this->belongsTo('Registration');
    }
}
