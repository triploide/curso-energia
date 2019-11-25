@extends('app')

@section('title')
	Nuevo title
@endsection

@section('head')
	<h1>Formulario</h1>
@endsection

@section('title-page')
	Ejemplo de blade
@endsection

@section('content')
	<form action="?">
		<div class="form-group">
			<label for="titulo">Título</label>
			<input class="form-control" type="text" name="titulo" id="titulo" value="{{ $titulo }}">
		</div>

		<div class="form-group">
			<label for="duracion">Duración</label>
			<input class="form-control" type="text" name="duracion" id="duracion" value="{{ $duracion }}">
		</div>

		<div class="form-group">
			<label for="actor">Actor</label>
			<input class="form-control" type="text" name="actor" id="actor">
			<input type="hidden" name="actor_id" id="actor_id" value="{{ $actor_id }}">
		</div>
		<div class="form-group">
			<label for="actor">Puntos</label>
			<select name="puntos" id="puntos" class="form-control">
				@foreach ($otraData as $punto)
					<option value="{{ $punto }}">{{ $punto }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Enviar</button>
		</div>
	</form>
@endsection

@section('footer')
	Ministerio de Energía
@endsection