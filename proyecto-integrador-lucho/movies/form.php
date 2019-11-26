<?php

use Base\Movie;
use Jenssegers\Blade\Blade;

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

$blade = new Blade('../php/views', '../php/cache'); //paths

$form_title = 'Peliculas';
echo $blade->render('movies/show', ['movie' => $movie, 'form_title' => $form_title ]);

?>

