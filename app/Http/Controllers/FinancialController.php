<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FinancialController extends Controller
{

    public function index()
    {
        return view('financial/show',compact('financial'));
        $result = DB::select('SELECT charge FROM payments');
        print_r($result);
    }
}
