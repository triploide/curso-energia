<?php
use Jenssegers\Blade\Blade;

require_once __DIR__ . '/../php/config.php';
require_once __DIR__ . '/../vendor/autoload.php';

$blade = new Blade('../php/views', '../php/cache'); //paths
$form_title = 'Peliculas';
echo $blade->render('movies/show_index', ['' => $movie, 'form_title' => $form_title ]);
?>