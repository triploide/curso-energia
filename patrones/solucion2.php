<?php

require_once 'Triste.php';
require_once 'Contento.php';
require_once 'Tamagochi.php';

$tamagochi = new Tamagochi;
$tamagochi->comer();
$tamagochi->ignorar();
$tamagochi->mimos(); //acá paso a contento

$tamagochi->mimos();
$tamagochi->ignorar();
$tamagochi->comer(); //acá me muero
