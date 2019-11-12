<?php
use Age\Aldeano;
use Age\Arbol;

require 'Personaje.php';
require 'Aldeano.php';
require 'Arbol.php';

$aldeano = new Aldeano;
$arbol = new Arbol;

echo "<pre>";
var_dump($arbol);
echo "+++++++++++++++++";

$arbol->Talar($aldeano);

echo "<pre>";
var_dump($arbol);
echo "+++++++++++++++++";
echo "<pre>";
var_dump($aldeano);


?>