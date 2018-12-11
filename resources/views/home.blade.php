@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @if (Auth::user()->isAdmin())
                        @include('admin')
                    @endif
                    <br/>
                    <center><h1>User View</h1></center>
                    <table>
                    <tr>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="{{ url('vehicles') }}">
                            View Vehicles
                        </a>
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="{{ url('registrations/create') }}">
                            Register For Event
                        </a>
                        </td>
                    <td>
                    <a class="btn btn-primary btn-lg" style="width:175px" href="{{ url('events') }}">
			            View Events
		            </a>
                    <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="{{ url('registrations') }}">
                            View Registrations
                        </a>
                        </td>
                    </td>
                    </tr>
                    <tr>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="{{ url('sponsors') }}">
                            View Sponsors
                        </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="{{ url('clubs') }}">
                            View Clubs
                        </a>
                        </td>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="{{ url('clubs/create') }}">
                            Create New Club
                        </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="{{ url('payments/create') }}">
                                Make Payment
                            </a>
                        </td>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="{{ url('payments') }}">
                            View Payments
                        </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="{{ url('donations/create') }}">
                            Donate
                        </a>
                        </td>
                        <td>
                        <a class="btn btn-primary btn-lg" style="width:175px" href="{{ url('donations') }}">
                            View Donations
                        </a>
                        </td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
