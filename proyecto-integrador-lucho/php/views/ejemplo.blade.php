<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $titulo }}</title>
	@include('partials/head')
</head>
<body>
	@if ($mostrarTitulo)
		<h1>{{ $titulo }}</h1>
	@else
		<h1>Sin título</h1>
	@endif
	
	<p>{{ $contenido }}</p>

	<ul>
		@foreach ($tags as $tag)
			<li>{{ $tag }}</li>
		@endforeach
	</ul>
</body>
</html>