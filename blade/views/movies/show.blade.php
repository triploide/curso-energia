@extends('movies/app')

@section('title')
	{{ $movie->getColumna('title') }}
@endsection

@section ('head')
	@include('partials/head')
@endsection

@section ('body')
	<h1>{{ $movie->getColumna('title') }}</h1>
	
	<p><strong>Duración: </strong>{{ $movie->getColumna('length') }}</p>

	<p><strong>Estreno: </strong>{{ $movie->getColumna('release_date') }}</p>

<<<<<<< HEAD
	<p><strong>Genero: </strong>{{ $movie->getColumna('rating
=======
	<p><strong>Rating: </strong>{{ $movie->getColumna('rating') }}</p>
>>>>>>> e8034004a873db2c8413d87a2205566f487cb2e7
@endsection