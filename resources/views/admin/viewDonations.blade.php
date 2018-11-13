<div class="col-sm-8 blog-main">

	@foreach ($donations as $donation)

	@include ('donations.donation')

	@endforeach

	<nav class="blog-pagination">
	  <a class="btn btn-outline-primary" href="#">Older</a>
	  <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
	</nav>

</div>