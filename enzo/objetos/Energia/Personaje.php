<?php

namespace Energia;

class Personaje
{
	private $nombre;
	private $edad;

	public function __construct($nombre, $edad)
	{
		$this->nombre = $nombre;
		$this->edad = $edad;
	}
}
