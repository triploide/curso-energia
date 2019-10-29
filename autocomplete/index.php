<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Autocomplete</title>

	<!-- bootstrap - css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- jquery ui - css -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
	<!-- font awesome - css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- jquery - js -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<!-- jquery ui - js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<!-- popper - js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- bootstrap - js -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script src="script.js"></script>
</head>
<body>
	<div class="container">
		<h1>Autocomplete</h1>

		<form action="?">
			<div class="form-group">
				<label for="titulo">Título</label>
				<input class="form-control" type="text" name="titulo" id="titulo">
			</div>

			<div class="form-group">
				<label for="duracion">Duración</label>
				<input class="form-control" type="text" name="duracion" id="duracion">
			</div>

			<div class="form-group">
				<label for="actor">Actor</label>
				<input class="form-control" type="text" name="actor" id="actor">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
		</form>
	</div>
</body>
</html>