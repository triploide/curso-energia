<?php

use Age\Aldeano;
use Age\Arbol;

require 'Arbol.php';
require 'Personaje.php';
require 'Aldeano.php';

$arbol = new Arbol;
$aldeano = new Aldeano;

echo '<pre>';
var_dump($arbol, $aldeano);

$aldeano->recolectar($arbol);
$aldeano->recolectar($arbol);

echo '<pre>';
var_dump($arbol, $aldeano);


