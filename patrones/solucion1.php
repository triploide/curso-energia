<?php

$estado = 'hambre';
$vida = true;

//comer, mimos, ignorar

function comer()
{
	global $vida;
	global $estado;

	if (!$vida) return false;

	switch ($estado) {
		case 'triste':
			echo 'Hago sonido<br>';
			break;
		case 'contento':
			$vida = false;
			echo 'RIP<br>';
			break;
		case 'hambre':
			$estado = 'contento';
			echo 'Cambió a contento<br>';
			break;
		
		default:
			# code...
			break;
	}
}

function mimos()
{
	global $vida;
	global $estado;

	if (!$vida) return false;

	switch ($estado) {
		case 'triste':
			$estado = 'contento';
			echo 'Cambió a contento<br>';
			break;
		case 'contento':
			echo 'Hacer sonido<br>';
			break;
		case 'hambre':
			echo 'Hacer sonido<br>';
			break;
		
		default:
			# code...
			break;
	}
}

function ignorar()
{
	global $vida;
	global $estado;

	if (!$vida) return false;

	switch ($estado) {
		case 'triste':
			echo 'Hago sonido<br>';
			break;
		case 'contento':
			echo 'nada...<br>';
			break;
		case 'hambre':
			echo 'Tengo hambre!!!<br>';
			break;
		
		default:
			# code...
			break;
	}
}

mimos();
ignorar();
comer();

mimos();
ignorar();
comer();

mimos();
ignorar();
comer();
