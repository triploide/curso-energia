<?php

use Base\Movie;
use Base\MySQLDB;

require 'php/classes/Table.php';
require 'php/classes/Movie.php';
require 'php/classes/MySQLDB.php';

$base = new MySQLDB('localhost', 'movies', 'root', '');
$movie = new Movie($base);

$movie->setId(null);
$movie->setColumna('title', 'iron man 8');
$movie->setColumna('rating', '7');
$movie->setColumna('length', '180');
$movie->setColumna('release_date', '2020-10-10');
$movie->setBase($base);


$movie->save();

//$base->save($movie);

//echo '<pre>';
//var_dump($movie);
