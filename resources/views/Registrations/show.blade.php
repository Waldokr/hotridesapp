<!-- index.blade.php 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrations</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>-->
  @extends('layouts.app')
@section('content')
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Event</th>
        <th>Payment Recieved</th>
        <th>Represented Club</th>
        <th>Registered Vehicle</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($registrations as $registration) 
      <tr>
        <td>{{$registration['id']}}</td>
        <td>{{$registration['user_id']}}</td>
        <td>{{$registration['payment_id']}}</td>
        <td>{{$registration['club_id']}}</td>
        <td>{{$registration['vehicle_id']}}</td>
        @if(Auth::user()->isAdmin() || Auth::user()->id == $registration['user_id'])
        <td><a href="{{action('RegistrationController@edit', $registration['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('RegistrationController@destroy', $registration['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
  </div>
@endsection