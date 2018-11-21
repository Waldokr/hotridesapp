<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js">

@extends('layouts.app')


@section('content')

  <div class="col-sm-8 blog-main">	
		<h1>Register Vehicle</h1>
		<form method="POST" action="/register/{{$id}}">
		  <div class="form-group">
		  	



		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
	</div>

@endsection