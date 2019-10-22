<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<?php include 'tpl/head.php'; ?>
	<script>
		$(document).ready(function () {
			$('input').on('blur', function (e) {
				var valor = $(this).val();
				if (valor.length <= 5) {
					$(this).addClass('is-invalid');
				}
			});
			
			$('input').on('focus', function () {
				$(this).removeClass('is-invalid');
			});
		}); //end document ready
	</script>
</head>
<body>
	<div class="container">
		<?php include 'tpl/nav.php' ?>

		<div class="row">
			<div class="col-md-3">
				<?php include 'tpl/menu.php' ?>
			</div>
			<div class="col-md-9">
				<form action="?">
					<div class="form-group">
						<label for="titulo">Título</label>
						<input class="form-control" type="text" id="titulo">
						<div class="valid-feedback">Todo salió bien</div>
						<div class="invalid-feedback">Todo salió mal</div>
					</div>

					<div class="form-group">
						<label for="duracion">Duración</label>
						<input class="form-control" type="text" name="duracion" id="duracion">
						<div class="valid-feedback">Todo salió bien</div>
						<div class="invalid-feedback">Todo salió mal</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>

				</form>
			</div>
		</div>

	</div>
</body>
</html>