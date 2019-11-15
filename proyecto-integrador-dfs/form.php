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
				<form action="/php/controllers/movieController.php" method="POST">
					<div class="form-group">
						<label for="title">Título</label>
						<input class="form-control" type="text" name="title" id="title">
						<div class="invalid-feedback">La película ya existe</div>
					</div>

					<div class="form-group">
						<label for="length">Duración</label>
						<input class="form-control" type="text" name="length" id="length">
						<div class="invalid-feedback">Sólo se aceptan números sin decimales</div>
					</div>

					<div class="form-group">
						<label for="rating">Rating</label>
						<input class="form-control" type="text" name="rating" id="rating">
						<div class="invalid-feedback">Sólo se aceptan números sin decimales</div>
					</div>

					<div class="form-group">
						<label for="release_date">Fecha de estreno</label>
						<input class="form-control" type="text" name="release_date" id="release_date">
					</div>

					<div class="form-group">
						<label for="genre_id">Género</label>
						<select class="form-control" name="genre_id" id="genre_id">
							<option value="">Seleccionar</option>
						</select>
						<div class="invalid-feedback">Tenés que seleccionar un género</div>
					</div>


					<div class="form-group d-flex mt-5 justify-content-end">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>

				</form>
			</div>
		</div>

	</div>
</body>
</html>