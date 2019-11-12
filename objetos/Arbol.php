<?php

namespace Age;

class Arbol
{
	private $madera;

	function __construct()
	{
		$this->madera = 100;
	}

	public function talar()
	{
		$cantidad = rand(10, 30);

		if ($cantidad > $this->madera) {
			$cantidad = $this->madera;
		}

		$this->madera -= $cantidad;
		if ($this->madera <= 0) {	
			echo 'Árbol talado';
		}
		return $cantidad;
	}
}
