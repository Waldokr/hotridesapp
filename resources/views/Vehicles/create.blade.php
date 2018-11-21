
@extends('layouts.app')


@section('content')

    <div class="col-sm-8 blog-main">
		<h1>Register Vehicle</h1>
		<form method="POST" action="/vehicles">

        	{{ csrf_field() }} 

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
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
	</div>
   
@endsection