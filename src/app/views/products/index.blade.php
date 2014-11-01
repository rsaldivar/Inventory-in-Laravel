
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Username</td>
			<td>Email</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->name }}</td>
			<td>{{ $value->username }}</td>
			<td>{{ $value->email }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /users/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'users/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the nerd (uses the show method found at GET /users/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->id) }}">Show this Nerd</a>

				<!-- edit this nerd (uses the edit method found at GET /users/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id .'/edit' ) }}">Edit this Nerd</a>

			</td>
		</tr>
	@endforeach