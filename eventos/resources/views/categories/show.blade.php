<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $category->value }}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<h1>{{ $category->value }}</h1>

		@foreach ($events as $event)
			<h2>{{ $event->title }}</h2>
			<h3>{{ $category->value }}</h3>
			<p>El día {{ $event->date->format('d-m-Y') }}</p>
		@endforeach

		<div>
			{{ $events->links() }}
		</div>

	</main>
		
</body>
</html>