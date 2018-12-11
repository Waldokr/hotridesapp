<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{
    public function create()
    {
        return view('donations/create');
    }

    /* Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
        $this->validate(request(), [
            'type' => 'required',
            'number' => 'required',
            'expiry' => 'required',
            'name' => 'required',
            'charge' => 'required'
        ]);

        $payment= new \App\Donation;
        $payment->type=$request->get('type');
        $payment->number = $request->get('number');
        $payment->expiry=$request->get('expiry');
        $payment->name=$request->get('name');
        $payment->charge=$request->get('charge');
        $payment->save();
        
        return redirect('donations');
        //return redirect('/admin');
   }

   public function update(Request $request, $id)
   {
    $this->validate(request(), [
        'type' => 'required',
        'number' => 'required',
        'expiry' => 'required',
        'name' => 'required',
        'charge' => 'required'
    ]);

    $payment = \App\Donation::find($id);
    $payment->type=$request->get('type');
    $payment->user_id = \Auth::user()->id;
    $payment->number = $request->get('number');
    $payment->expiry=$request->get('expiry');
    $payment->name=$request->get('name');
    $payment->charge=$request->get('charge');
    $payment->save();
    
    return redirect('donations');
    //return redirect('/admin');
   }

   public function index()
    {
        $donations=\App\Donation::all();
        return view('donations/show',compact('donations'));
    }

    public function edit($id)
    {
        $donation = \App\Donation::find($id);
        return view('donations/edit',compact('donation','id'));
    }

    public function destroy($id)
    {
        $donation = \App\Donation::find($id);
        $donation->delete();
        return redirect('donations');
    }
}
