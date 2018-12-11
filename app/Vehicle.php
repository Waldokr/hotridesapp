<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

    public function publish()
    {
        
             Event::create([
             'make' => request('make'),
             'model'=> request('model'),
             'colour'=> request('colour'),
             'year'=> request('year'),
             'car_photo' => request('car_photo'),
             
             //'user_id' => auth()->id()
         ]);
         
    }
}
