@extends('movies/app')

@section('name')
	Peliculas
@endsection

@section('title')
	{{ $movie->getColumna('title') }}
@endsection

@section ('head')
<!DOCTYPE html>
<html lang="en">

	<meta charset="UTF-8">
	<title>{{ $movie->getColumna('title') }}</title>
	@include('partials/head')
@endsection

@section ('body')
	<h1>{{ $movie->getColumna('title') }}</h1>
	
	<p><strong>Duración: </strong>{{ $movie->getColumna('length') }}</p>

	<p><strong>Estreno: </strong>{{ $movie->getColumna('release_date') }}</p>

	<p><strong>Genero: </strong>{{ $movie->getColumna('rating') }}</p>

</html>
@endsection