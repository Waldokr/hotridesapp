<div class="col-sm-8 blog-main">

	@foreach ($clubs as $club)

	@include ('clubs.club')

	@endforeach

	<nav class="blog-pagination">
	  <a class="btn btn-outline-primary" href="#">Older</a>
	  <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
	</nav>

</div>