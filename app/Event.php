<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  
   

    public function publish()
    {
        
             Event::create([
             'name' => request('name'),
             'date'=> request('date'),
             'early_cost'=> request('early_cost'),
             'reg_cost'=> request('reg_cost'),
          
             
             //'user_id' => auth()->id()
         ]);
         
    }
}
