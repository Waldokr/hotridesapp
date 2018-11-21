
@extends('layouts.app')


@section('content')

    <div class="col-sm-8 blog-main">
		<h1>Edit Vehicle</h1>
		<form method="POST"   action="/vehicles/{{$id}}">

        	{{ csrf_field() }} 

		  <div class="form-group">
		    <label for="title">Make:</label>
		    <input type="text" class="form-control" id='make' name="make" value="{{$vehicle->make}}">
		  </div>
		  <div class="form-group">
		    <label for="body">Model:</label>
            <input type="text" class="form-control" id='model'  name="model" value="{{$vehicle->model}}">   
		  </div>
		  <div class="form-group">
		  	<label>Colour</label>
		  	<input type="text" class="form-control" id='colour'  name="colour" value="{{$vehicle->colour}}">
		  </div>
		  <div class="form-group">
		  	<label>Year</label>
		  	<input type="text" class="form-control" id='year' name="year" value="{{$vehicle->year}}">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Confirm</button>
		  </div>
		</form>
	</div>
   
@endsection