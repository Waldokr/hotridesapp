<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js">

@extends('layouts.app')

@section('content')
	<div class="col-sm-8 blog-main">	
		<h1>Choose Your Event</h1>
		<form method="POST" action="/registrations">
		  <div class="form-group">
		
			{{ csrf_field()}} 

		  <div class="form-group">
		    <label for="title">Choose Your Event</label>
		    <input type="text" class="form-control" id='event_id' name="event_id">
		  </div>
		
		  <div class="form-group">
		    <label for="title">Club Representation:</label>
		    <input type="text" class="form-control" id='club_id' name="club_id">
		  </div>

		 <div class="form-group">
				<label for="title">Make:</label>
				<input type="text" class="form-control" id='make' name="make">
			</div>
					<div class="form-group">
				<label>Model:</label>
				<input type="text" class="form-control" id='model'  name="model">
			</div>		 
			<div class="form-group">
				<label>Colour</label>
				<input type="text" class="form-control" id='colour'  name="colour">
			</div>
			<div class="form-group">
				<label>Year</label>
				<input type="text" class="form-control" id='year' name="year">
			</div>
			<div class="form-group">
					<label>Photo of your vehicle</label>
					<input type="file" accept=".jpg,.jpeg,.png,.tiff,.pdf,.bmp" id='image' name="image">
			</div>

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
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
	</div>

@endsection