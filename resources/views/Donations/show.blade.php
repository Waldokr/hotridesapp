<!-- index.blade.php 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Donations Made</title>
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
        <th>Card Type</th>
        <th>Card Number</th>
        <th>Expiry Date</th>
        <th>Carholder Name</th>
        <th>Amount Charged</th>
        <th>Date Created</th>
        @if (Auth::user()->isAdmin())
          <th colspan="2">Action</th>
        @endif
      </tr>
    </thead>
    <tbody>
      
      @foreach($donations as $donation)
      @if (Auth::user()->isAdmin() || Auth::user()->id == $donation->user_id)
      <tr>
        <td>{{$donation['id']}}</td>
        <td>{{$donation['type']}}</td>
        <td>{{$donation['number']}}</td>
        <td>{{$donation['expiry']}}</td>
        <td>{{$donation['name']}}</td>
        @else
        <td></td><td></td><td></td><td></td><td></td>
        @endif
        <td>${{$donation['charge']}}</td>
        <td>{{$donation['created_at']}}</td>
        @if (Auth::user()->isAdmin())
        <td><a href="{{action('DonationController@edit', $donation['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('DonationController@destroy', $donation['id'])}}" method="post">
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