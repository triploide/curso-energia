<?php

use Base\Movie;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../conn.php';
require_once '../classes/Table.php';
require_once '../classes/Movie.php';
require_once '../classes/MySQLDB.php';
require_once __DIR__ . '/../../vendor/autoload.php';



/*
$image->resize(null, 100, function ($constraint) {
	$constraint->aspectRatio();
});*/
//$image->crop(100, 200);
//$image->with(); // getter
//$image->height(); // getter
//$image->blur();
//$image->insert('path/a/otra/image.jpg');


//Agregar la columna banner en la table movies
//Persistir el nombre de imagen en la base

if (isset($_FILES['banner']) && $_FILES['banner']['error'] == UPLOAD_ERR_OK) {
	$image = Image::make($_FILES['banner']['tmp_name']);
	$image->fit(900, 600);
	$image->insert($CONFIG['filesystem']['images'] . 'watermark.png', 'center');
	$ext = pathinfo($_FILES['banner']['name'], PATHINFO_EXTENSION);
	$banner = uniqid() . '.' . $ext;
	$image->save($CONFIG['filesystem']['path'] . 'movies/' . $banner);
}


if ($_POST['id']) {
	$movie = new Movie;
	$movie->find($_POST['id']);
} else {
	$movie = new Movie;
}

$fecha = Carbon::createFromFormat('d/m/Y', $_POST['release_date']);
$movie->setColumna('title', $_POST['title']);
$movie->setColumna('rating', $_POST['rating']);
$movie->setColumna('length', $_POST['length']);
$movie->setColumna('release_date', $fecha->format('Y-m-d'));
$movie->setColumna('banner', $banner);
$movie->save();

//header('location: ../../movies');
