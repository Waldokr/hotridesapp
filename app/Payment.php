<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function publish()
    {
        
             Event::create([
             'type' => request('type'),
             'number'=> request('number'),
             'expiry'=> request('expiry'),
             'name'=> request('name'),
             'charge'=> request('charge')

          
             
             //'user_id' => auth()->id()
         ]);
         
    }
}
