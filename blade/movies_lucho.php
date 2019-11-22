<?php

use Base\Movie;
use Jenssegers\Blade\Blade;

require_once 'vendor/autoload.php';

$blade = new Blade('views', 'cache'); //paths

$data = [
	'titulo' => 'Vista de una peli',
	'titulo2' => 'Otra cosa',
	'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
	'mostrarTitulo' => false,
	'tags' => ['acción', 'comedia', 'drama']
];

//Ejemplo

require_once __DIR__ . '/../proyecto-integrador/php/config.php';
require_once __DIR__ . '/../proyecto-integrador/php/classes/Table.php';
require_once __DIR__ . '/../proyecto-integrador/php/classes/Movie.php';
require_once __DIR__ . '/../proyecto-integrador/php/classes/MySQLDB.php';


$movie = new Movie;
$movie->find(7);

echo $blade->render('movies/show_lucho', ['movie' => $movie]);
