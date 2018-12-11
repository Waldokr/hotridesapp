<!-- index.blade.php 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vehicles</title>
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
        <th>Make</th>
        <th>Model</th>
        <th>Colour</th>
        <th>Year</th>
        <th>Image</th>
        
          <th colspan="2">Action</th>
       
      </tr>
    </thead>
    <tbody>
      
      @foreach($vehicles as $vehicle)
     
      <tr>
        <td>{{$vehicle['id']}}</td>
        <td>{{$vehicle['make']}}</td>
        <td>{{$vehicle['model']}}</td>
        <td>{{$vehicle['colour']}}</td>
        <td>{{$vehicle['year']}}</td>
        <td><img src="{{ $vehicle['image'] }}" alt="Missing Image"/></td>
        @foreach($registrations as $registration)
        @if (Auth::user()->isAdmin() == false & $vehicle['id'] == $registration['vehicle_id'] & $registration['user_id'] == Auth::user()->id)
        <td><a href="{{action('VehicleController@edit', $vehicle['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('VehicleController@destroy', $vehicle['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
        @endif
        @endforeach
        @if (Auth::user()->isAdmin())
        <td><a href="{{action('VehicleController@edit', $vehicle['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('VehicleController@destroy', $vehicle['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  
  </div>
@endsection