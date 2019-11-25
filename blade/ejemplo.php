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

echo $blade->render('ejemplo', $data);
