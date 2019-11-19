<?php

require_once __DIR__ . '/../conn.php';
require '../../../composer/vendor/autoload.php';

//editar fecha (Datepicker - Carbon - composer)

//var_dump(); con la fecha como viene del form
//var_dump(); con la fecha lista para mysql
$fecha = $_POST['release_date'];
var_dump($fecha);	


$fechaMaquina = Carbon\Carbon::createFromFormat('d/m/Y', $fecha);
var_dump($fechaMaquina->toDateString());

exit;

$sql = '
	UPDATE movies
	SET
		title = :title,
		length = :length,
		rating = :rating,
		release_date = :release_date
	WHERE id = :id
';

if ($_POST['id']) { //editar
	$stmt = $pdo->prepare($sql);
	$stmt->execute([
		':title' => $_POST['title'],
		':length' => $_POST['length'],
		':rating' => $_POST['rating'],
		':release_date' => $_POST['release_date'],
		':id' => $_POST['id'],
	]);
} else { //crear

}

header('location: ../../movies');

//crear y editar
