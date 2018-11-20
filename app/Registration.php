<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public function users()
    {
        return $this->hasOne('App\User');
    }

    public function vehicles()
    {
        return $this->hasOne('App\Vehicle');
    }

}
