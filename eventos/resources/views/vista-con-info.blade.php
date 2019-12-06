<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vista con info</title>
</head>
<body>
	<h1>{{ $titulo }}</h1>
	<ul>
		@foreach ($items as $item)
			<li>{{ $item }}</li>
		@endforeach
	</ul>

	@if (isset($footer))
		<p>{{ $footer }}</p>
	@endif

</body>
</html>