<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js">

@extends('layouts.app')


@section('content')

    <div class="col-sm-8 blog-main">
		<h1>Create An Event</h1>
		<form method="POST" action="/events">

        	{{ csrf_field() }} 

		  <div class="form-group">
		    <label for="title">Name:</label>
		    <input type="text" class="form-control" id='name' name="name">
		  </div>
		  <div class="form-group">
		    <label for="body">Date:</label>
            <input class="IP_calendar"  type="text" id="date" name="date" title="Y-m-d">   
		  </div>
		  <div class="form-group">
		  	<label>Early Price</label>
		  	<input type="text" class="form-control" id='early_cost'  name="early_cost">
		  </div>
		  <div class="form-group">
		  	<label>Regular Price</label>
		  	<input type="text" class="form-control" id='reg_cost' name="reg_cost">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Create</button>
		  </div>
		</form>
	</div>
   
@endsection