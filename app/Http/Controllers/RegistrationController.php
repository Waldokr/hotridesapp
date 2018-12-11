<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {

        $this->validate(request(), [
            'user_id' => 'required',
            'event_id' => 'required',
            'payment_id' => 'required',
            'club_id' => 'required',
            'vehicle_id' => 'required'
        ]);

        $registration= new \App\registration;
        $registration->integer('user_id');
        $registration->integer('event_id');
        $registration->integer('payment_id');
        $registration->integer('club_id');
        $registration->integer('vehicle_id');
        $registration->save();

        return redirect('registration');
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'user_id' => 'required',
            'event_id' => 'required',
            'payment_id' => 'required',
            'club_id' => 'required',
            'vehicle_id' => 'required'
        ]);

        $registration= \App\Registration::find($id);
        $registration->integer('user_id');
        $registration->integer('event_id');
        $registration->integer('payment_id');
        $registration->integer('club_id');
        $registration->integer('vehicle_id');
        $registration->save();

        return redirect('registration');
    }

    public function index()
    {
        $registrations=\App\Registration::all();
        return view('Register/show',compact('registrations'));
    }

    public function edit($id)
    {
        $registration = \App\Registration::find($id);
        return view('Register/edit',compact('Register','id'));
    }

    public function destroy($id)
    {
        $registration = \App\Registration::find($id);
        $registration->delete();
        return redirect('registration');
    }
}
