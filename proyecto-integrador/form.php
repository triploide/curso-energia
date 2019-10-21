<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<?php include 'tpl/head.php'; ?>
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
						<label for="nombre">Nombre</label>
						<input class="form-control is-invalid" type="text">
						<div class="valid-feedback">Todo salió bien</div>
						<div class="invalid-feedback">Todo salió mal</div>
					</div>

					<div class="form-group">
						<label for="jquery">Test con jQuery</label>
						<input id="input-jquery" class="form-control" type="text">
						<div class="valid-feedback">Todo salió bien</div>
						<div class="invalid-feedback">Todo salió mal</div>
					</div>

					<p>Elegí una opción</p>
					
					<div class="form-check">
						<input type="checkbox" name="opciones[]" class="form-check-input" id="opcion1">
						<label for="opcion1" class="form-check-label">Opción 1</label>
					</div>

					<div class="form-check">
						<input type="checkbox" name="opciones[]" class="form-check-input" id="opcion2">
						<label for="opcion2" class="form-check-label">Opción 1</label>
					</div>

					<div class="form-check">
						<input type="checkbox" name="opciones[]" class="form-check-input" id="opcion3">
						<label for="opcion3" class="form-check-label">Opción 1</label>
					</div>

				</form>
			</div>
		</div>

	</div>
</body>
</html>