<?php

use Age\Aldeano;
use Energia\Personaje;

require 'Energia/Personaje.php';
require 'Personaje.php';
require 'Aldeano.php';

$aldeano1 = new Aldeano;
$aldeano2 = new Aldeano;

echo $aldeano1->getVida();

$aldeano1->mover(10, 20);

echo '<pre>';
var_dump($aldeano1);

echo '<pre>';
var_dump($aldeano2);

//--------------------

$otroPersonaje = new Personaje('Alf', 254);

echo '<pre>';
var_dump($otroPersonaje);
