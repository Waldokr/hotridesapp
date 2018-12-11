
@extends('layouts.app')


@section('content')

    <div class="col-sm-8 blog-main">
		<h1>Register Vehicle</h1>
		<form method="POST" action="/sponsors/{{$id}}">

        	{{ csrf_field() }} 

		  <div class="form-group">
			<div class="form-label-group">
						<input id="event_id" type="text" class="form-control" name="event_id" placeholder="Sponsored Event:">
						<label for="event_id">Sponsored Event:</label>
				</div>
		  </div>
          <div class="form-group">
					<div class="form-label-group">
						<input id="name" type="text" class="form-control" name="name" placeholder="Sponsor Name:">
						<label for="name">Sponsor Name:</label>
				</div>
		  </div>		 
		  <div class="form-group">
			<div class="form-label-group">
						<input id="description" type="text" class="form-control" name="description" placeholder="Agreement Description">
						<label for="description">Agreement Description</label>
				</div>
		  </div>
		  <div class="form-group">
			<div class="form-label-group">
						<input id="charge" type="text" class="form-control" name="charge" placeholder="Negotiated Price:">
						<label for="charge">Negotiated Price:</label>
				</div>
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
	</div>
   
@endsection