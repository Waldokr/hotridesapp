    <div class="flex items-center justify-center h-9/10">
        <div class="text-center">
            <h1 class="text-grey-darkest text-4xl mb-6">Admin View</h1>
            <p class="uppercase tracking-wide text-sm text-grey-darkest ">For admin users only!</p>
        </div>
    </div>
    <div class="col-sm-8 blog-main">
	<table>
		<tr>
		<td>
			<a class="btn btn-info" href="{{ url('Users') }}">
				View Users
			</a>
		</td>
		<td>
			<a class="btn btn-info" href="{{ url('events/create') }}">
				Create New Event
			</a>
		</td>
		<td>
			<a class="btn btn-info" href="{{ url('clubs/create') }}">
				Create New Club
			</a>
		</td>
		<td>
			<a class="btn btn-info" href="{{ url('sponsors/create') }}">
				Register Sponsors
			</a>
		</td>
		</tr>
		</table>
	</div>