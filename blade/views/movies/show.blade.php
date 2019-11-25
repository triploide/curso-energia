<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $movie->getColumna('title') }}</title>
	@include('partials/head')
</head>
<body>
	<h1>{{ $movie->getColumna('title') }}</h1>
	
	<p><strong>Duración: </strong>{{ $movie->getColumna('length') }}</p>

	<p><strong>Estreno: </strong>{{ $movie->getColumna('release_date') }}</p>
</body>
</html>