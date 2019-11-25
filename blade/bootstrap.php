<?php

use Jenssegers\Blade\Blade;

require_once 'vendor/autoload.php';

$blade = new Blade('views', 'cache');

$info = [
	'titulo' => 'Avatar',
	'duracion' => '100',
	'actor_id' => '1',
	'otraData' => [1,2,3,4,5,6]
];

echo $blade->render('bootstrap/index', $info);
