<?php

require 'vendor/autoload.php';

$carbon = Carbon\Carbon::now();

$carbon->addDays(10)->format('Y-m-d h:i:s');

$hoy = Carbon\Carbon::createFromFormat('d-m-Y', '08-11-2019');

var_dump($hoy->format('Y-m-d h:i:s'));

// crear una nueva fecha con carbon now
// sumarle 10 min a la fecha
// mostrar la fecha con formato d-m-Y

// crear una nueva fecha a partir a partir de este string 28-02-2019
// sumarle 1 día a la fecha anterior
// mostrar el número de mes de la fecha anterior




