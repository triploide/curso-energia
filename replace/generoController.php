<?php

$generos = [
	'pelicula' => [
		'Ciencia ficción',
		'Terror'
	],
	'serie' => [
		'Anime',
		'Sit-Com'
	]
];

$tipo = $_GET['tipo'];
$html = '';

if (array_key_exists ($tipo, $generos)){ 

	sleep(1);

	foreach ($generos[$tipo] as $genero) {
		$html .= '<option value="'.$genero.'">'.$genero.'</option>';
	}

}else{

	$html = '<option value="">La opción de tipo seleccionada no es válida</option>';

}
	echo $html;
