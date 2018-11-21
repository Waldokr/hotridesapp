<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {

        $vehicle= new \App\registration;
        $vehicle->model_id=$request->get('model_id');
        $vehicle->make = $request->get('make');
        $vehicle->year=$request->get('year');
        $vehicle->color=$request->get('color');
        $vehicle->save();
        
        return redirect('events');
    }

    public function update(Request $request, $id)
    {
        $vehicle= \App\Registration::find($id);
        $vehicle->model_id=$request->get('model_id');
        $vehicle->make = $request->get('make');
        $vehicle->year=$request->get('year');
        $vehicle->color=$request->get('color');
        $vehicle->save();

        return redirect('events');
    }

    public function index()
    {
        $vehicles=\App\Registration::all();
        return view('Register/show',compact('Registrations'));
    }

    public function edit($id)
    {
        $vehicle = \App\Registration::find($id);
        return view('Register/edit',compact('Register','id'));
    }

    public function destroy($id)
    {
        $vehicle = \App\Registration::find($id);
        $vehicle->delete();
        return redirect('events');
    }
}
