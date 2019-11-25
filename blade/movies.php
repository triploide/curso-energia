<?php

use Base\Movie;
use Jenssegers\Blade\Blade;

require_once 'vendor/autoload.php';
require_once __DIR__ . '/../proyecto-integrador/php/config.php';
require_once __DIR__ . '/../proyecto-integrador/php/classes/Table.php';
require_once __DIR__ . '/../proyecto-integrador/php/classes/Movie.php';
require_once __DIR__ . '/../proyecto-integrador/php/classes/MySQLDB.php';




$movie = new Movie;
$movie->find($_GET['id']);
$blade = new Blade('views', 'cache'); //paths
echo $blade->render('movies/show', ['movie' => $movie]);

?>


