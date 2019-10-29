<?php

require "conn.php";

$term = $_GET['term'];

//preparar
$stmt = $pdo->prepare('SELECT first_name, last_name, id FROM actors where first_name like "'.$term.'%" ORDER BY first_name, last_name');

//ejecutar
$stmt->execute();

//recuperar
$actores = $stmt->fetchAll(PDO::FETCH_ASSOC);

$respuesta = [];
foreach ($actores as $actor) {
	$respuesta[] = [
		'label' => $actor['first_name'] . ' ' . $actor['last_name'],
		'value' => $actor['first_name'] . ' ' . $actor['last_name'],
		'id' => $actor['id'],
	];
}

header('Content-type: application/json');
echo json_encode($respuesta);

