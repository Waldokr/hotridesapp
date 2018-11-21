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

    public function publish()
    {
        
             Register::create([
             'model_id' => request('model_id'),
             'make'=> request('make'),
             'year'=> request('year'),
             'color'=> request('color'),
          
             
             //'user_id' => auth()->id()
         ]);
         
    }

}
