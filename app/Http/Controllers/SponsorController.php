<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SponsorController extends Controller
{
    public function create()
    {
        return view('sponsors/create');
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'event_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'charge' => 'required'
        ]);


        $sponsor= new \App\Sponsor;
        $sponsor->event_id=$request->get('event_id');
        $sponsor->name = $request->get('name');
        $sponsor->description=$request->get('description');
        $sponsor->charge=$request->get('charge');
        $sponsor->save();
        
        return redirect('sponsors');
    }

    public function update(Request $request, $id)
    {

        $this->validate(request(), [
            'event_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'charge' => 'required'
        ]);


        $sponsor= \App\Sponsor::find($id);
        $sponsor->event_id=$request->get('event_id');
        $sponsor->name = $request->get('name');
        $sponsor->description=$request->get('description');
        $sponsor->charge=$request->get('charge');
        $sponsor->save();
        
        return redirect('sponsors');
    }


    public function index()
    {
        $sponsors=\App\Sponsor::all();
        return view('sponsors/show',compact('sponsors'));
    }

    public function edit($id)
    {
        $sponsor = \App\Sponsor::find($id);
        return view('sponsors/edit',compact('sponsor','id'));
    }

    public function destroy($id)
    {
        $sponsor = \App\Sponsor::find($id);
        $sponsor->delete();
        return redirect('sponsors');
    }
}
