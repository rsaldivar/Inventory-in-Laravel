@extends('master')
@section('content')

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'users')) }}


	<div class="form-group">
		{{ Form::label('name', 'Username') }}
		{{ Form::text('username', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>
	
	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', null, array('class' => 'form-control')) }}
	</div>
	
	<div class="form-group">
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('password confirm', 'Password confirm') }}
		{{ Form::password('password_confirm', null, array('class' => 'form-control')) }}
	</div>


	<div class="form-group">
		{{ Form::label('status', 'Status') }}
		{{ Form::select('status', array('active' => 'active' , 'inactive' => 'inactive'), null, array('class' => 'form-control')) }}
	</div>
	{{ Form::submit('Create the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop
<!--!content-->