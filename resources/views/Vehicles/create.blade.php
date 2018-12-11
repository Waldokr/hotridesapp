
@extends('layouts.app')


@section('content')

    <div class="col-sm-8 blog-main">
		<h1>Register Vehicle</h1>
		<form method="POST" action="/vehicles">

        	{{ csrf_field() }} 

		  <div class="form-group">
				<div class="form-label-group">
						<input id="make" type="text" class="form-control" name="make" placeholder="Make:">
						<label for="make">Make:</label>
				</div>
		  </div>
          <div class="form-group">
				<div class="form-label-group">
						<input id="model" type="text" class="form-control" name="model" placeholder="Model:">
						<label for="model">Model:</label>
				</div>
		  </div>		 
		  <div class="form-group">
		  	<div class="form-label-group">
						<input id="colour" type="text" class="form-control" name="colour" placeholder="Colour:">
						<label for="colour">Colour:</label>
				</div>
		  </div>
		  <div class="form-group">
			<div class="form-label-group">
						<input id="year" type="text" class="form-control" name="year" placeholder="Year:">
						<label for="year">Year:</label>
				</div>
		  </div>
		  <div class="form-group">
		  		<label>Photo of your vehicle</label>
		  		<input type="file" accept=".jpg,.jpeg,.png,.tiff,.pdf,.bmp" id='image' name="image">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
	</div>
   
@endsection