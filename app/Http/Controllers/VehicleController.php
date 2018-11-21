<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'make' => 'required',
            'model' => 'required',
            'colour' => 'required',
            'year' => 'required'
        ]);


        $event= new \App\Vehicle;
        $event->name=$request->get('make');
        $event->date = $request->get('model');
        $event->early_cost=$request->get('colour');
        $event->reg_cost=$request->get('year');
        $event->save();
        
        return redirect('home');
    }

    public function index()
    {
        $vehicles=\App\Vehicle::all();
        return view('index',compact('vehicles/show'));
    }
}
