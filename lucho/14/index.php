<?php

require '../../composer/vendor/autoload.php';

$carbon = Carbon\Carbon::now();

$carbon->addDays(10)->format('Y-m-d h:i:s');

$hoy = Carbon\Carbon::createFromFormat('d-m-Y', '08-11-2019');

//var_dump($hoy->format('Y-m-d h:i:s'));

// crear una nueva fecha con carbon now
$fecha_nueva = Carbon\Carbon::now();
$fecha_nueva = $fecha_nueva->setTimezone('America/Argentina/Buenos_Aires');
var_dump($fecha_nueva);
echo "<br>";
// sumarle 10 min a la fecha
$fechaMasDiez = $fecha_nueva->addMinutes(10);
var_dump($fechaMasDiez);
echo "<br>";
// mostrar la fecha con formato d-m-Y
$fecha_dmy = $fechaMasDiez->format('d-m-Y');
var_dump($fecha_dmy);
echo "<br>";

// crear una nueva fecha a partir a partir de este string 28-02-2019
$fecha_febrero = Carbon\Carbon::createFromFormat('d-m-Y', '28-02-2019', 'America/Argentina/Buenos_Aires');
var_dump($fecha_febrero);
echo "<br>";
// sumarle 1 día a la fecha anterior
$fechaMasUno = $fecha_febrero->addDays(1);
var_dump($fechaMasUno);
echo "<br>";
// mostrar el número de mes de la fecha anterior
$fechaMasUnoNumero = $fechaMasUno->month;
var_dump($fechaMasUnoNumero);
echo "<br>";


//englishDayOfWeek
$fechaDia =  Carbon\Carbon::createFromFormat('d-m-Y', '23-01-2020');
$fechaDia = $fechaDia->locale("es")->englishDayOfWeek;

var_dump($fechaDia);
echo "<br>";

