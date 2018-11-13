<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public function users()
    {
        return $this->belongsTo('User');
    }

    public function vehicles()
    {
        return $this->belongsTo('Vehicle');
    }

}
