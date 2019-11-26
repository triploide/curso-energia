<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		@include('tpl/head')
		@yield('head')
	</head>
	<body>
		<div class="container">
			@include('tpl/nav')

			<main class="row">
				<div class="col-md-3">
					@include('tpl/menu')
				</div>
				<div class="col-md-9">
					@yield('content')
				</div>
			</main>
		</div>
	</body>
</html>