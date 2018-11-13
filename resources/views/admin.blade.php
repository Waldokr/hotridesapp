@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center h-9/10">
        <div class="text-center">
            <h1 class="text-grey-darkest text-4xl mb-6">Admin</h1>
            <p class="uppercase tracking-wide text-sm text-grey-darkest ">For admin users only!</p>
        </div>
    </div>
    <div class="col-sm-8 blog-main">
		<h1>Create An Event</h1>
		<form method="POST" action="/posts">
		  <div class="form-group">
		    <label for="title">Title:</label>
		    <input type="text" class="form-control" id="title" name="title">
		  </div>
		  <div class="form-group">
		    <label for="body">Description:</label>
		    <textarea id="description" name="description" class="form-control"></textarea>
		  </div>
		  <div class="form-group">
		  	<label>Day of Event</label>
		  	<input type="text" class="form-control" id="day" name="day">
		  </div>
		  <div class="form-group">
		  	<label>Month of Event</label>
		  	<input type="text" class="form-control" id="month" name="month">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Create</button>
		  </div>
		</form>
		<h1>Register Vehicle</h1>
		<form method="POST" action="/posts">
		  <div class="form-group">
		    <label for="title">Make:</label>
		    <input type="text" class="form-control" id="make" name="make">
		  </div>
		  <div class="form-group">
		    <label for="body">Model:</label>
		    <input type="text" class="form-control" id="model" name="model">
		  </div>
		  <div class="form-group">
		  	<label>Year:</label>
		  	<input type="text" class="form-control" id="year" name="year">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
		<h1>Register Sponsors</h1>
		<form method="POST" action="/sponsors">
		  <div class="form-group">
		    <label for="title">Sponsership Type:</label>
		    <input type="text" class="form-control" id="type" name="type">
		  </div>
		  <div class="form-group">
		    <label for="body">Amount Paid:</label>
		    <input type="text" class="form-control" id="paid" name="paid">
		  </div>
	      <div class="form-group">
		    <label for="body">Description:</label>
		    <textarea id="description" name="description" class="form-control"></textarea>
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
	</div>
@endsection