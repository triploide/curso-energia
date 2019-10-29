<?php

require "conn.php";

$term = $_GET['term'];

//preparar




switch ($_GET['field']) {
	case 'actor':
		$sql = "SELECT CONCAT(first_name, ' ', last_name) as value, id FROM actors where first_name like '".$term."%' ORDER BY value";
	break;
	case 'genero':
		$sql = "SELECT name as value, id FROM genres where name like '".$term."%' ORDER BY value";
	break;
	case 'movies':
		$genre_id = $_GET['genre_id'];
		$sql = "SELECT title as value, id FROM movies where title like '".$term."%' and genre_id = ".$genre_id." ORDER BY value";
	break;
	
}



$stmt = $pdo->prepare($sql);

//ejecutar
$stmt->execute();

//recuperar
$valores = $stmt->fetchAll(PDO::FETCH_ASSOC);




$respuesta = [];
foreach ($valores as $valor) {
	$respuesta[] = [
		'label' => $valor['value'],
		'value' => $valor['value'],
		'id' => $valor['id'],
	];
}

header('Content-type: application/json');
echo json_encode($respuesta);

