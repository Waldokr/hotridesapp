
@extends('layouts.app')


@section('content')

    <div class="col-sm-8 blog-main">
		<h1>Edit Vehicle</h1>
		<form method="POST"   action="/vehicles/{{$id}}">

        	{{ csrf_field() }} 

		  <div class="form-group">
				<div class="form-label-group">
						<input id="make" type="text" class="form-control" name="make" placeholder="Make:" value="{{$vehicle->make}}">
						<label for="make">Make:</label>
				</div>
		  </div>
		  <div class="form-group">
						<div class="form-label-group">
						<input id="model" type="text" class="form-control" name="model" placeholder="Model:" value="{{$vehicle->model}}">
						<label for="model">Model:</label>
				</div>
		  </div>
		  <div class="form-group">
				<div class="form-label-group">
						<input id="colour" type="text" class="form-control" name="colour" placeholder="Colour:" value="{{$vehicle->colour}}">
						<label for="colour">Colour:</label>
				</div>
		  </div>
		  <div class="form-group">
				<div class="form-label-group">
						<input id="year" type="text" class="form-control" name="year" placeholder="Year:" value="{{$vehicle->year}}">
						<label for="year">Year:</label>
				</div>
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Confirm</button>
		  </div>
		</form>
	</div>
   
@endsection