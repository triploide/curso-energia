<?php

//print_r($_FILES);
//die();

use Base\Genre;
use Carbon\Carbon;
//use Intervention\Image\ImageManagerStatic as Image;

//editar fecha (Datepicker - Carbon - composer)
/*$stmt = $pdo->prepare('SELECT * from movies WHERE id = :id');
	$stmt->execute([':id' => $_GET['id']]);
	$movie = $stmt->fetch(PDO::FETCH_ASSOC);*/
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../conn.php';
require_once '../classes/Table.php';
require_once '../classes/Genre.php';
require_once '../classes/MySQLDB.php';
require_once __DIR__ . '/../../vendor/autoload.php';


$genre = Genre::find($_POST['id']);
$genre->delete();