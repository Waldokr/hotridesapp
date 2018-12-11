<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            'year' => 'required'
        ]);


        $vehicle= new \App\Vehicle;
        $vehicle->make=$request->get('make');
        $vehicle->model = $request->get('model');
        $vehicle->colour=$request->get('colour');
        $vehicle->year=$request->get('year');
        if ($request->hasFile('car_photo')){
            $filename = $request->file->getClientOriginalName();
            $request->file->storeAs('public/upload',$filename);
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
        if ($request->hasFile('car_photo')){
            $filename = $request->file->getClientOriginalName();
            return $request->file->storeAs('public/upload',$filename);
        }
        $vehicle->save();
        
        return redirect('vehicles');
    }


    public function index()
    {
        $vehicles=\App\Vehicle::all();
        return view('vehicles/show',compact('vehicles'));
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
