<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClubController extends Controller
{
    public function create()
    {
        return view('clubs/create');
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'title' => 'required',
            'region' => 'required',
            'description' => 'required'
        ]);


        $club= new \App\Club;
        $club->name=$request->get('title');
        $club->user_id = \Auth::user()->id;
        $club->region = $request->get('region');
        $club->description=$request->get('description');
        $club->save();
        
        return redirect('clubs');
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'region' => 'required',
            'description' => 'required'
        ]);

        $club= \App\Club::find($id);
        $club->name=$request->get('name');
        $club->region = $request->get('region');
        $club->description=$request->get('description');
        $club->save();

        return redirect('clubs');
    }


    public function index()
    {
        $clubs=\App\Club::all();
        return view('clubs/show',compact('clubs'));
    }

    public function edit($id)
    {
        $club = \App\Club::find($id);
        return view('clubs/edit',compact('club','id'));
    }

    public function destroy($id)
    {
        $club = \App\Club::find($id);
        $club->delete();
        return redirect('clubs');
    }
}
