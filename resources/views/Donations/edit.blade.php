<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js">

@extends('layouts.app')


@section('content')

    <div class="col-sm-8 blog-main">
		<h1>Pay Us</h1>
		<form method="POST" action="/donations/{{$id}}">

        	{{ csrf_field() }} 

		  <div class="form-group">
		    <label for="title">Credit Card Type:</label>
		    <input type="text" class="form-control" id='type' name="type">
		  </div>
          <div class="form-group">
		  	<label>Card Number</label>
		  	<input type="text" class="form-control" id='number' name="number">
		  </div>

		  <div class="form-group">
		    <label for="body">Expiry Date:</label>
            <input class="IP_calendar"  type="text" id="expiry" name="expiry" title="Y-m-d">   
		  </div>
		  <div class="form-group">
		  	<label>Cardholder Name:</label>
		  	<input type="text" class="form-control" id='name'  name="name">
		  </div>
		  <div class="form-group">
		  	<label>Registration Fee:</label>
		  	<input type="text" class="form-control" id='charge' name="charge">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Pay</button>
		  </div>
		</form>
	</div>
   
@endsection