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
        <th>Event ID</th>
        <th>Sponsor Name</th>
        <th>Agreement Description</th>
        <th>Negotiated Price</th>
        @if (Auth::user()->isAdmin())
          <th colspan="2">Action</th>
        @endif
      </tr>
    </thead>
    <tbody>
      
      @foreach($sponsors as $sponsor)
     
      <tr>
        <td>{{$sponsor['id']}}</td>
        <td>{{$sponsor['user_id']}}</td>
        <td>{{$sponsor['name']}}</td>
        <td>{{$sponsor['description']}}</td>
        <td>{{$sponsor['charge']}}</td>
        @if (Auth::user()->isAdmin())
        <td><a href="{{action('SponsorController@edit', $sponsor['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('SponsorController@destroy', $sponsor['id'])}}" method="post">
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