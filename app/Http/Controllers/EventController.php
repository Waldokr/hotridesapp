<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    //
    public function create()
    {
        return view('Events/create');
    }

    /* Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
        $this->validate(request(), [
            'name' => 'required',
            'date' => 'required',
            'early_cost' => 'required',
            'reg_cost' => 'required'
        ]);


        $event= new \App\event;
        $event->name=$request->get('name');
        //$date=date_create($request->get('date'));
        //$format = date_format($date,"Y-m-d");
        $event->date = $request->get('date');
        $event->early_cost=$request->get('early_cost');
        $event->reg_cost=$request->get('reg_cost');
        $event->save();
        
        return redirect('events');
        //return redirect('/admin');
   }

   public function update(Request $request, $id)
   {
        $this->validate(request(), [
            'name' => 'required',
            'date' => 'required',
            'early_cost' => 'required',
            'reg_cost' => 'required'
        ]);


        $event= \App\Event::find($id);
        $event->name=$request->get('name');
        //$date=date_create($request->get('date'));
        //$format = date_format($date,"Y-m-d");
        $event->date = $request->get('date');
        $event->early_cost=$request->get('early_cost');
        $event->reg_cost=$request->get('reg_cost');
        $event->save();
        
        return redirect('events');
        //return redirect('/admin');
   }

   public function index()
    {
        $events=\App\Event::all();
        return view('events/show',compact('events'));
    }

    public function edit($id)
    {
        $event = \App\Event::find($id);
        return view('events/edit',compact('event','id'));
    }

    public function destroy($id)
    {
        $event = \App\Event::find($id);
        $event->delete();
        return redirect('events');
    }
}
