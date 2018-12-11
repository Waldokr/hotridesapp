
@extends('layouts.app')


@section('content')

    <div class="col-sm-8 blog-main">
		<h1>Register Your Club</h1>
		<form method="POST" action="/clubs">

        	{{ csrf_field() }} 

		  <div class="form-group">
		    <div class="form-label-group">
						<input id="title" type="text" class="form-control" name="title" placeholder="Club Title:">
						<label for="title">Club Title:</label>
				</div>
		  </div>
			<div class="form-group">
				<div class="form-label-group">
						<input id="region" type="text" class="form-control" name="region" placeholder="Region of Representation:">
						<label for="region">Region of Representation:</label>
				</div>
		  </div>		 
		  <div class="form-group">
				<div class="form-label-group">
						<input id="description" type="text" class="form-control" name="description" placeholder="Description">
						<label for="description">Description</label>
				</div>
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
	</div>
   
@endsection