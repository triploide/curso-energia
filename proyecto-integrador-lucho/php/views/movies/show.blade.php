@extends('app')

@section('title')
	Formulario de {{ $form_title }}
@endsection

@section('head')
	<script src="Form.js"></script>
@endsection

@section ('content')
	<form action="../php/controllers/movieController.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="title">Título</label>
			<input class="form-control" type="text" name="title" id="title" value="{{ $movie->title }}">
			<div class="invalid-feedback">La película ya existe</div>
		</div>

		<div class="form-group">
			<label for="length">Duración</label>
			<input class="form-control" type="text" name="length" id="length" value="{{  $movie->length }}">
			<div class="invalid-feedback">Sólo se aceptan números sin decimales</div>
		</div>

		<div class="form-group">
			<label for="rating">Rating</label>
			<input class="form-control" type="text" name="rating" id="rating" value="{{  $movie->rating }}">
			<div class="invalid-feedback">Sólo se aceptan números sin decimales</div>
		</div>

		<div class="form-group">
			<label for="release_date">Fecha de estreno</label>
			<input class="form-control" type="text" name="release_date" id="release_date" value="{{ $movie->release_date }}">
		</div>

		<div class="form-group">
			<label for="banner">Banner</label>
			<input class="form-control" type="file" name="banner" id="banner" value="">
		</div>

		<div class="form-group">
			<label for="genre_id">Género</label>
			<select class="form-control" name="genre_id" id="genre_id" >
				<option value="">Seleccionar</option>
			</select>
			<div class="invalid-feedback">Tenés que seleccionar un género</div>
		</div>

		<input type="hidden" name="id" value="{{ $movie->id }}">

		<div class="form-group d-flex mt-5 justify-content-end">
			<button type="submit" class="btn btn-primary">Enviar</button>
		</div>

	</form>
@endsection