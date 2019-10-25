<?php

$pelis = [
	'cars',
	'it',
	'up',
	'terminator',
	'el bromas',
	'duro de matar'
];



header("Content-type:application/json");



switch ($_GET['validation']) {
	case 'title':
		$titulo = $_GET['titulo'];
		$existe = in_array($titulo, $pelis);
		$json = json_encode(['resultado' => $existe]);
	break;
	
	case 'mail':
		$mail = $_GET['mail'];
		$resultado = json_encode(['resultado' => filter_var($mail, FILTER_VALIDATE_EMAIL)]);
		$json = $resultado;
	break;
	
}

echo $json;



