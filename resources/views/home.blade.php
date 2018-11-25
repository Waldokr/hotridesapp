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
                    <a class="btn btn-info" href="{{ url('vehicles/create') }}">
			            Register Vehicle
		            </a>
                    <a class="btn btn-info" href="{{ url('events') }}">
			            View Events
		            </a>
                    <a class="btn btn-info" href="{{ url('sponsors') }}">
                        View Sponsors
                    </a>
                    <a class="btn btn-info" href="{{ url('clubs') }}">
                        View Clubs
                    </a>
                    <a class="btn btn-info" href="{{ url('donation/create') }}">
                        Donate
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
