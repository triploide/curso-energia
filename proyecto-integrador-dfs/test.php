<?php

use Base\Movie;
use Base\MySQLDB;

require 'php/classes/Table.php';
require 'php/classes/Movie.php';
require 'php/classes/MySQLDB.php';

$movie = new Movie;
$movie->setId(1);
$movie->setColumna('title', 'Avatar 10');
$movie->setColumna('rating', '10');
$movie->setColumna('length', '100');
$movie->setColumna('release_date', '2020-10-10');
$movie->save();

//echo '<pre>';
//var_dump($movie);
