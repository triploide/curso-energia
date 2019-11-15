<?php

use Carbon\Carbon;
require '../../vendor/autoload.php';
require_once __DIR__ . '/../conn.php';
//editar fecha (Datepicker - Carbon - composer)
/*$stmt = $pdo->prepare('SELECT * from movies WHERE id = :id');
	$stmt->execute([':id' => $_GET['id']]);
	$movie = $stmt->fetch(PDO::FETCH_ASSOC);*/




var_dump($_POST['release_date']);
$hoy = Carbon::createFromFormat('d/m/Y', $_POST['release_date']);
echo ("<br>");
var_dump($hoy->format('Y-m-d h:i:s'));
//var_dump(); con la fecha como viene del form
//var_dump(); con la fecha lista para mysql

exit;


//crear y editar
