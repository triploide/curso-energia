<?php

use Base\Genre;
use Base\Movie;
use Jenssegers\Blade\Blade;

require_once __DIR__ . '/../php/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../php/classes/Table.php';
require_once __DIR__ . '/../php/classes/Movie.php';
require_once __DIR__ . '/../php/classes/Genre.php';
require_once __DIR__ . '/../php/classes/MySQLDB.php';

$findAll = Genre::findAll();

$options = [];
foreach ($findAll as $data) {
	$options[$data['id']] = $data['name'];
}




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

$blade = new Blade('../php/views', '../php/cache'); //paths
$form_title = 'Peliculas';
echo $blade->render('movies/show', ['movie' => $movie, 'form_title' => $form_title ]);

?>