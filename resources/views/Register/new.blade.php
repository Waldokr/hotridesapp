<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js">

@extends('layouts.app')

@section('content')

	<div class="col-sm-8 blog-main">	
		<h1>Register Vehicle</h1>
		<form method="POST" action="/register">
		  <div class="form-group">
		    <label for="body">Model:</label>
		    <input type="text" class="form-control" id="model" name="model">
		  </div>
		  <div class="form-group">
		  	<label>Year:</label>
		  	<input type="text" class="form-control" id="year" name="year">
		  </div>
		  <div class="form-group">
		  	<label>Color:</label>
		  	<input type="text" class="form-control" id="color" name="color">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
	</div>

@endsection