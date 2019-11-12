<?php

use Base\Movie;
use Base\MySQLDB;

require 'php/classes/Table.php';
require 'php/classes/Movie.php';
require 'php/classes/MySQLDB.php';

$base = new MySQLDB('localhost', 'movies', 'root', '');
$movie = new Movie;

$movie->setId(1);
$movie->setColumna('title', 'Avatar 3');
$movie->setColumna('rating', '7');
$movie->setColumna('length', '180');
$movie->setColumna('release_date', '2020-10-10');

//$movie->save();

$base->save($movie);

//echo '<pre>';
//var_dump($movie);
