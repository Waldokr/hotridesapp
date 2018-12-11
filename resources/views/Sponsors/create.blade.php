
@extends('layouts.app')


@section('content')

    <div class="col-sm-8 blog-main">
<<<<<<< HEAD
		<h1>Sign Up A Sponsor</h1>
=======
		<h1>Register Sponsor</h1>
>>>>>>> c750a3a56b5a8e48b2a5bb9427b141e0008a5408
		<form method="POST" action="/sponsors">

        	{{ csrf_field() }} 

		  <div class="form-group">
		    <label for="title">Sponsored Event:</label>
		    <input type="text" class="form-control" id='event_id' name="event_id">
		  </div>
          <div class="form-group">
		  	<label>Sponsor Name:</label>
		  	<input type="text" class="form-control" id='name'  name="name">
		  </div>		 
		  <div class="form-group">
		  	<label>Agreement Description</label>
		  	<input type="text" class="form-control" id='description'  name="description">
		  </div>
		  <div class="form-group">
		  	<label>Negotiated Price:</label>
		  	<input type="text" class="form-control" id='charge' name="charge">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
	</div>
   
@endsection