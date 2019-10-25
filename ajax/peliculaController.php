<?php

$pelis = [
	'cars',
	'it',
	'up',
	'terminator',
	'el bromas',
	'duro de matar'
];

$titulo = $_GET['titulo'];

$existe = in_array($titulo, $pelis);

$json = json_encode(['existe' => $existe]);

header("Content-type:application/json");
echo $json;

