<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js">

@extends('layouts.app')


@section('content')

    <div class="col-sm-8 blog-main">
		<h1>Update Event</h1>
		<form method="POST"   action="/events/{{$id}}">

        	{{ csrf_field() }} 

		  <div class="form-group">
		    <label for="title">Name:</label>
		    <input type="text" class="form-control" id='name' name="name" value="{{$event->name}}">
		  </div>
		  <div class="form-group">
		    <label for="body">Date:</label>
            <input class="IP_calendar"  type="text" id="date" name="date" title="Y-m-d" value="{{$event->date}}">   
		  </div>
		  <div class="form-group">
		  	<label>Early Price</label>
		  	<input type="text" class="form-control" id='early_cost'  name="early_cost" value="{{$event->early_cost}}">
		  </div>
		  <div class="form-group">
		  	<label>Regular Price</label>
		  	<input type="text" class="form-control" id='reg_cost' name="reg_cost" value="{{$event->reg_cost}}">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Update</button>
		  </div>
		</form>
	</div>
   
@endsection