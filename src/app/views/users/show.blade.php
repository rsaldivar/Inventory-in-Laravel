@extends('master')
@section('content')

		
		<h2>{{ $user->name }}</h2>
		<p>
			<strong>Username:</strong> {{ $user->username }}<br>
			<strong>Email:</strong> {{ $user->email }}<br>
		</p>


@stop
<!--!content-->