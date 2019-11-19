<?php

use Base\Movie;
use Carbon\Carbon;

require_once __DIR__ . '/../conn.php';
require_once '../classes/Table.php';
require_once '../classes/Movie.php';
require_once '../classes/MySQLDB.php';
require_once __DIR__ . '/../../vendor/autoload.php';


/*

var_dump();
*/

if ($_POST['id']) {
	$movie = new Movie;
	$movie->find($_POST['id']);
} else {
	$movie = new Movie;
}

echo '<pre>';
var_dump($movie);

$fecha = Carbon::createFromFormat('d/m/Y', $_POST['release_date']);
$movie->setColumna('title', $_POST['title']);
$movie->setColumna('rating', $_POST['rating']);
$movie->setColumna('length', $_POST['length']);
$movie->setColumna('release_date', $fecha->format('Y-m-d'));
$movie->save();

echo '<pre>';
var_dump($movie);

//header('location: ../../movies');

//crear y editar
