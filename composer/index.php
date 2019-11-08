<?php

require 'vendor/autoload.php';

$carbon = Carbon\Carbon::now();

$carbon->addDays(10)->format('Y-m-d h:i:s');

$hoy = Carbon\Carbon::createFromFormat('d-m-Y', '08-11-2019');

var_dump($hoy->format('Y-m-d h:i:s'));

