@extends('layouts.app')

@section('content')
	<div class="col-sm-8 blog-main">
		<h1>Register Vehicle</h1>
		<form method="POST" action="/register">
		  <div class="form-group">
		    <label for="title">Make:</label>
		    <input type="text" class="form-control" id="make" name="make">
		  </div>
		  <div class="form-group">
		    <label for="body">Model:</label>
		    <input type="text" class="form-control" id="model" name="model">
		  </div>
		  <div class="form-group">
		  	<label>Year:</label>
		  	<input type="text" class="form-control" id="year" name="year">
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
		<h1>Register Club:</h1>
		<form method="POST" action="/clubs">
		  <div class="form-group">
		    <label for="title">Name:</label>
		    <input type="text" class="form-control" id="name" name="name">
		  </div>
		  <div class="form-group">
		    <label for="body">Address:</label>
		    <input type="text" class="form-control" id="address" name="address">
		  </div>
		  <div class="form-group">
		  	<label>City:</label>
		  	<input type="text" class="form-control" id="city" name="city">
		  </div>
		  <div class="form-group">
		  	<label>Postal Code:</label>
		  	<input type="text" class="form-control" id="code" name="code">
		  </div>
		  <div class="form-group">
		  	<label>Logo:</label>
		  	<input type="text" class="form-control" id="year" name="year">
		  </div>
		  <div class="form-group">
		    <label for="body">Description:</label>
		    <textarea id="description" name="description" class="form-control"></textarea>
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Register</button>
		  </div>
		</form>
		<h1>Donate</h1>
		<form method="POST" action="/donated">
		  <div class="form-group">
		    <label for="title">Amount:</label>
		    <input type="text" class="form-control" id="amount" name="amount">
		  </div>
		  <div class="form-group">
		    <label>Money Type:</label>
		    <input type="radio" name="moneytype" value="debit"> Debit<br>
		    <input type="radio" name="moneytype" value="credit"> Credit<br>
		  </div>
		  <div class="form-group">
		    <label>Card Number:</label>
		    <input type="text" class="form-control" id="amount" name="cardnumber">
		  </div>
		  <div class="form-group">
		    <label>Experation Date:</label>
		    <input type="text" class="form-control" id="amount" name="experationdate">
		  </div>
		  <div class="form-group">
		    <label>Security Number:</label>
		    <input type="text" class="form-control" id="amount" name="securitynumber">
		  </div>
		</form>
	</div>
@endsection