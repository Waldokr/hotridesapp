<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Person;
use Image;

class VehicleController extends Controller
{
    public function create()
    {
        return view('vehicles/create');
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'make' => 'required',
            'model' => 'required',
            'colour' => 'required',
            'year' => 'required',
            'car_photo' => 'required'
        ]);


        $vehicle= new \App\Vehicle;
        $vehicle->make=$request->get('make');
        $vehicle->model = $request->get('model');
        $vehicle->colour=$request->get('colour');
        $vehicle->year=$request->get('year');
        if ($request->hasFile('car_photo')){
            $photoName = time().'.'.$request->car_photo->getClientOriginalName();
            
            $request->car_photo->move(public_path('cars'), $photoName);
        $vehicle->image_name = $photoName;
        }
        $vehicle->save();
        
        return redirect('vehicles');
    }

    public function update(Request $request, $id)
    {

        $this->validate(request(), [
            'make' => 'required',
            'model' => 'required',
            'colour' => 'required',
            'year' => 'required'
        ]);


        $vehicle= \App\Vehicle::find($id);
        $vehicle->make=$request->get('make');
        $vehicle->model = $request->get('model');
        $vehicle->colour=$request->get('colour');
        $vehicle->year=$request->get('year');
        $vehicle->save();
        
        return redirect('vehicles');
    }


    public function index()
    {
        $vehicles=\App\Vehicle::all();
        $registrations=\App\Registration::all();
        return view('vehicles/show',compact('vehicles', 'registrations'));
    }

    public function edit($id)
    {
        $vehicle = \App\Vehicle::find($id);
        return view('vehicles/edit',compact('vehicle','id'));
    }

    public function destroy($id)
    {
        $vehicle = \App\Vehicle::find($id);
        $vehicle->delete();
        return redirect('vehicles');
    }
}
