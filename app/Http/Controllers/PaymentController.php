<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function create()
    {
        return view('payments/create');
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

        $payment= new \App\Payment;
        $payment->type=$request->get('type');
        $payment->user_id = \Auth::user()->id;
        $payment->number = $request->get('number');
        $payment->expiry=$request->get('expiry');
        $payment->name=$request->get('name');
        $payment->charge=$request->get('charge');
        $payment->save();
        
        return redirect('payments');
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

        $payment = \App\Payment::find($id);
        $payment->type=$request->get('type');
        $payment->number = $request->get('number');
        $payment->expiry=$request->get('expiry');
        $payment->name=$request->get('name');
        $payment->charge=$request->get('charge');
        $payment->save();
        
        return redirect('payments');
        //return redirect('/admin');
    }

    public function index()
        {
            $payments=\App\Payment::all();
            return view('payments/show',compact('payments'));
        }

        public function edit($id)
        {
            $payment = \App\Payment::find($id);
            return view('payments/edit',compact('payment','id'));
        }

        public function destroy($id)
        {
            $payment = \App\Payment::find($id);
            $payment->delete();
            return redirect('payments');
        }
}
