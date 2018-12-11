<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js">

@extends('layouts.app')


@section('content')

    <div class="col-sm-8 blog-main">
		<h1>Create Event</h1>
		<form method="POST" action="/payments">

        	{{ csrf_field() }} 

		  <div class="form-group">
			<div class="form-label-group">
						<input id="type" type="text" class="form-control" name="type" placeholder="Credit Card Type:">
						<label for="type">Credit Card Type:</label>
				</div>
		  </div>
          <div class="form-group">
					<div class="form-label-group">
						<input id="number" type="text" class="form-control" name="number" placeholder="Card Number">
						<label for="number">Card Number</label>
				</div>
		  </div>

		  <div class="form-group">
		    <label for="body">Expiry Date:</label>
            <input class="IP_calendar"  type="text" id="expiry" name="expiry" title="Y-m-d">   
		  </div>
		  <div class="form-group">
			<div class="form-label-group">
					<input id="name" type="text" class="form-control" name="name" placeholder="Cardholder Name:">
					<label for="number">Cardholder Name:</label>
				</div>
		  </div>
		  <div class="form-group">
			<div class="form-label-group">
					<input id="charge" type="text" class="form-control" name="charge" placeholder="Registration Fee:">
					<label for="charge">Registration Fee:</label>
				</div>
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Pay</button>
		  </div>
		</form>
	</div>
   
@endsection