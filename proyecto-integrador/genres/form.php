<?php

use Base\Genre;
use Base\Movie;

require_once __DIR__ . '/../php/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../php/classes/Table.php';
require_once __DIR__ . '/../php/classes/Movie.php';
require_once __DIR__ . '/../php/classes/Genre.php';
require_once __DIR__ . '/../php/classes/MySQLDB.php';

$genre = (isset($_GET['id'])) ? Genre::find($_GET['id']) : new Genre;
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
</head>
<body>
	<div class="container">
		<?php include __DIR__ . '/../tpl/nav.php' ?>

		<main class="row">
			<div class="col-md-3">
				<?php include __DIR__ . '/../tpl/menu.php' ?>
			</div>
			<div class="col-md-9">
				<form action="../php/controllers/genreController.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="title">Nombre</label>
						<input class="form-control" type="text" name="name" id="name" value="<?php echo $genre->name ?>">
					</div>

					<div class="form-group">
						<label for="title">Ranking</label>
						<input class="form-control" type="text" name="ranking" id="ranking" value="<?php echo $genre->ranking ?>">
					</div>

					<div class="form-group">
						<label for="activa">Activo</label>
						<select class="form-control" name="activa" id="activa">
							<option value="0">No</option>
							<option value="1">Si</option>
						</select>
					</div>

					<input type="hidden" name="id" value="<?php echo $genre->id ?>">

					<div class="form-group d-flex mt-5 justify-content-end">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>

				</form>
			</div>
		</main>

	</div>
</body>
</html>