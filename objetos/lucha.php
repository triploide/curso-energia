<?php

use Age\Aldeano;

require 'Personaje.php';
require 'Aldeano.php';

$aldeanoVikingo = new Aldeano;
$aldeanoTeuton = new Aldeano;

//lucha
while($aldeanoTeuton->getVida() > 0 && $aldeanoVikingo->getVida() > 0) {
	$aldeanoVikingo->hacerDanio($aldeanoTeuton);
	$aldeanoTeuton->hacerDanio($aldeanoVikingo);
}

echo '<pre>VIKINGO';
var_dump($aldeanoVikingo);

echo '<pre>TEUTON';
var_dump($aldeanoTeuton);

