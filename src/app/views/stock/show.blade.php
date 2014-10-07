<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('users') }}">Nerd Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('users') }}">View All Nerds</a></li>
		<li><a href="{{ URL::to('users/create') }}">Create a Nerd</a>
	</ul>
</nav>

<h1>Showing {{ $user->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $user->name }}</h2>
		<p>
			<strong>Username:</strong> {{ $user->username }}<br>
			<strong>Email:</strong> {{ $user->email }}<br>
		</p>
	</div>

</div>
</body>
</html>