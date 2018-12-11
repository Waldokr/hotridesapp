<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registrations/create');
    }
    
    public function store(Request $request)
    {

        $this->validate(request(), [
            'event_id' => 'required',
            'club_id' => 'required',
            'make' => 'required',
            'model' => 'required',
            'colour' => 'required',
            'year' => 'required',

            'type' => 'required',
            'number' => 'required',
            'expiry' => 'required',
            'name' => 'required',
            'charge' => 'required'

        ]);

        $vehicle= new \App\Vehicle;
        $vehicle->make=$request->get('make');
        $vehicle->model = $request->get('model');
        $vehicle->colour=$request->get('colour');
        $vehicle->year=$request->get('year');
        $vehicle->save();

        $payment= new \App\Payment;
        $payment->type=$request->get('type');
        $payment->user_id = \Auth::user()->id;
        $payment->number = $request->get('number');
        $payment->expiry=$request->get('expiry');
        $payment->name=$request->get('name');
        $payment->charge=$request->get('charge');
        $payment->save();

        $registration= new \App\Registration;
        $registration->event_id=$request->get('event_id');
        $registration->club_id=$request->get('club_id');
        $registration->user_id= \Auth::user()->id;
        $registration->vehicle_id=$vehicle->id;
        $registration->payment_id=$payment->id;
        $registration->save();

        return redirect('registrations');
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'event_id' => 'required',
            'club_id' => 'required',
            'make' => 'required',
            'model' => 'required',
            'colour' => 'required',
            'year' => 'required',

            'type' => 'required',
            'number' => 'required',
            'expiry' => 'required',
            'name' => 'required',
            'charge' => 'required'

        ]);

        $registration= \App\Registration::find($id);

        $vehicle= \App\Vehicle::find($registration->vehicle_id);
        $vehicle->make=$request->get('make');
        $vehicle->model = $request->get('model');
        $vehicle->colour=$request->get('colour');
        $vehicle->year=$request->get('year');
        $vehicle->save();

        $payment= \App\Payment::find($registration->payment_id);
        $payment->type=$request->get('type');
        $payment->user_id = \Auth::user()->id;
        $payment->number = $request->get('number');
        $payment->expiry=$request->get('expiry');
        $payment->name=$request->get('name');
        $payment->charge=$request->get('charge');
        $payment->save();

        $registration->event_id=$request->get('event_id');
        $registration->club_id=$request->get('club_id');
        $registration->user_id= \Auth::user()->id;
        $registration->vehicle_id=$vehicle->id;
        $registration->payment_id=$payment->id;
        $registration->save();

        return redirect('registrations');
    }

    public function index()
    {
        $registrations=\App\Registration::all();
        return view('registrations/show',compact('registrations'));
    }

    public function edit($id)
    {
        $registration = \App\Registration::find($id);
        return view('registrations/edit',compact('registration','id'));
    }

    public function destroy($id)
    {
        $registration = \App\Registration::find($id);
        $vehicle = \App\Vehicle::find($registration->vehicle_id);
        $payment = \App\Payment::find($registration->payment_id);
        $registration->delete();
        $payment->delete();
        $vehicle->delete();
        return redirect('registrations');
    }
}
