<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('admin');
    }
    public function viewRegistration()
    {
    	$registrations = Registration::latest()->get();	
    	return view('admin.viewRegistration', compact('registrations'));
    }
    public function viewClubs()
    {
    	$clubs = Club::latest()->get();
    	return view('admin.viewClubs', compact('clubs'));
    }
    public function viewDonations()
    {
    	$donations = Donation::latest()->get(); 
    	return view('admin.viewDonations');
    }
    public function viewSponsors()
    {
    	$sponsors = Sponsor::latest()->get();
    	return view('admin.viewSponsors');
    }
    public function storeRegistration()
    {
    	publish(new Registration(request()));
    	return redirect('/admin');
    }
    public function storeClubs()
    {
    	publish(new Club(request()));
    	return redirect('/admin');
    }
    public function storeDonations()
    {
    	publish(new Donation(request()));
    	return redirect('/admin');
    }
    public function storeSponsors()
    {
    	publish(new Sponsor(request()));
    	return redirect('/admin');
    }
}