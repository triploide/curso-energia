@extends('movies/app')

@section('title')
	{{ $movie->getColumna('title') }} - Nombre del sitio
@endsection

@section('h1')
	{{ $movie->getColumna('title') }}
@endsection

@section('content')
	<p><strong>Duración: </strong>{{ $movie->getColumna('length') }}</p>

	<p><strong>Estreno: </strong>{{ $movie->getColumna('release_date') }}</p>
@endsection