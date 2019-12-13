<?php

use Base\Genre;

require_once __DIR__ . '/../config.php';
require_once '../classes/Table.php';
require_once '../classes/Genre.php';
require_once '../classes/MySQLDB.php';

$genre = ($_POST['id']) ? Genre::find($_POST['id']) : new Genre;

$genre->setColumna('name', $_POST['name']);
$genre->setColumna('ranking', $_POST['ranking']);
$genre->setColumna('activa', $_POST['activa']);
$genre->save();

header('location: ../../genres');
