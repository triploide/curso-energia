<?php
//require_once __DIR__ . '/../php/conn.php';

/******************************************************************/
use Base\Movie;

require_once __DIR__ . '/../php/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../php/classes/Table.php';
require_once __DIR__ . '/../php/classes/Movie.php';
require_once __DIR__ . '/../php/classes/MySQLDB.php';

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

/******************************************************************/



$movie = false;
if (isset($_GET['id'])) {
	$stmt = $pdo->prepare('SELECT * from movies WHERE id = :id');
	$stmt->execute([':id' => $_GET['id']]);
	$movie = $stmt->fetch(PDO::FETCH_ASSOC);
}

function getValue($value) {
	global $movie;
	$response = '';
	if ($movie && isset($movie[$value])) {
		$response = $movie[$value];
	}
	return $response;
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<?php include __DIR__ . '/../tpl/head.php'; ?>
	<script src="../js/movie.js"></script>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

	<!-- Styles -->
	<link href="../css/jquery.filer.css" rel="stylesheet">

	
	
	
	<script src="../js/jquery.filer.min.js" type="text/javascript"></script>
	<script src="../js/custom.js" type="text/javascript"></script>

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
						<input class="form-control" type="text" name="title" id="title" value="<?php echo getValue('title') ?>">
						<div class="invalid-feedback">La película ya existe</div>
					</div>

					<div class="form-group">
						<label for="length">Duración</label>
						<input class="form-control" type="text" name="length" id="length" value="<?php echo getValue('length') ?>">
						<div class="invalid-feedback">Sólo se aceptan números sin decimales</div>
					</div>

					<div class="form-group">
						<label for="rating">Rating</label>
						<input class="form-control" type="text" name="rating" id="rating" value="<?php echo getValue('rating') ?>">
						<div class="invalid-feedback">Sólo se aceptan números sin decimales</div>
					</div>

					<div class="form-group">
						<label for="release_date">Fecha de estreno</label>
						<input class="form-control" type="text" name="release_date" id="release_date" value="<?php echo getValue('release_date') ?>">
					</div>

					<div class="form-group">
						<label for="banner">Banner</label>
						<input class="form-control" type="file" name="banner" id="banner" value="">
					</div>

					<div class="form-group">
						<label for="genre_id">Género</label>
						<select class="form-control" name="genre_id" id="genre_id" >
							<option value="">Seleccionar</option>
						</select>
						<div class="invalid-feedback">Tenés que seleccionar un género</div>
					</div>


					<div class="form-group">
						<label for="foto_prota">Foto Protagonistas</label>
						 <input type="file" name="files[]" id="foto_prota" multiple>
		    			<input type="submit" value="Submit">
					</div>





					<input type="hidden" name="id" value="<?php echo getValue('id') ?>">

					<div class="form-group d-flex mt-5 justify-content-end">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>
					<input class="form-control" type="hidden" name="id" id="id" value="<?php echo getValue('id') ?>">
				</form>
			</div>
		</main>

	</div>
</body>
</html>