<?php

use Base\Movie;

require_once __DIR__ . '/../php/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../php/classes/Table.php';
require_once __DIR__ . '/../php/classes/Movie.php';
require_once __DIR__ . '/../php/classes/MySQLDB.php';

/*
$movie = new Movie;
$movie->title = 'nuevo'; exit;
*/

$movie = (isset($_GET['id'])) ? Movie::find($_GET['id']) : new Movie;

$files = [];

foreach ($movie->files() as $file) {
	$files[] = [
		'id' => $file['id'],
		'name' => $file['old_name'],
		'size' => $file['size'],
		'type' => $file['type']
	];
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<?php include __DIR__ . '/../tpl/head.php'; ?>

	<!-- css -->
	<style>
        body {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #47525d;
            background-color: #fff;

            margin: 0;
            padding: 20px;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #eee;
        }
    </style>

	<!-- Jvascript -->
	<script src="/js/jquery.filer.min.js" type="text/javascript"></script>
	<script>
		var files = <?php echo json_encode($files); ?>;
		console.log(files);
	</script>
	<script src="/js/movie.js"></script>
</head>
<body>
	<div class="container">
		<?php include __DIR__ . '/../tpl/nav.php' ?>

		<main class="row">
			<div class="col-md-3">
				<?php include __DIR__ . '/../tpl/menu.php' ?>
			</div>
			<div class="col-md-9">
				<form action="../php/controllers/movieController.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="title">Título</label>
						<input class="form-control" type="text" name="title" id="title" value="<?php echo $movie->title ?>">
						<div class="invalid-feedback">La película ya existe</div>
					</div>

					<div class="form-group">
						<label for="length">Duración</label>
						<input class="form-control" type="text" name="length" id="length" value="<?php echo $movie->length ?>">
						<div class="invalid-feedback">Sólo se aceptan números sin decimales</div>
					</div>

					<div class="form-group">
						<label for="rating">Rating</label>
						<input class="form-control" type="text" name="rating" id="rating" value="<?php echo $movie->rating ?>">
						<div class="invalid-feedback">Sólo se aceptan números sin decimales</div>
					</div>

					<div class="form-group">
						<label for="release_date">Fecha de estreno</label>
						<input class="form-control" type="text" name="release_date" id="release_date" value="<?php echo $movie->release_date ?>">
					</div>

					<div class="form-group">
						<label for="banner">Banner</label>
						<input class="form-control" type="file" name="banner[]" id="banner" value="">
					</div>

					<div class="form-group">
						<label for="genre_id">Género</label>
						<select class="form-control" name="genre_id" id="genre_id" >
							<option value="">Seleccionar</option>
						</select>
						<div class="invalid-feedback">Tenés que seleccionar un género</div>
					</div>

					<input type="hidden" name="id" value="<?php echo $movie->id ?>">

					<div class="form-group d-flex mt-5 justify-content-end">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>

				</form>
			</div>
		</main>

	</div>
</body>
</html>