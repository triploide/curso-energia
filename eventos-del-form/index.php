<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Eventos del Formulario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script>
		$(document).ready(function () {

			//eventos del form: keyup, keypress, blur, focus, submit
			$('label[for="titulo"]').on('click', function () {
				console.log('Label título')
			});

			$('#titulo').on('keyup', function () {
				console.log('Tecla')
			});

			$('#titulo').on('blur', function () {
				console.log('Blur')
			});

			$('#duracion').on('focus', function () {
				console.log('Focus')
			});

			$('form').on('submit', function (evento) {
				console.log('submit')
				evento.preventDefault();
			});
		});
	</script>
</head>
<body>

	<div class="container">
		<h1>Formulario</h1>

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
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
		</form>
	</div>

	
	
</body>
</html>