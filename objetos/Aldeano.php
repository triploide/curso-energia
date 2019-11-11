<?php

namespace Age;

class Aldeano extends Personaje
{
	private $vida;
	private $ataque;
	private $materiales;
	
	function __construct()
	{
		parent::__construct();
		$this->vida = 10;
		$this->ataque = 1;
		$this->materiales = 0;
	}

	public function getVida()
	{
		return $this->vida;
	}

	public function hacerDanio($aldeano)
	{
		if ($this->vida > 0) {
			$ataque = $this->ataque;
			$critico = rand(1,3);

			if ($critico == 3) {
				$ataque += 2;
			}

			$aldeano->restarVida($ataque);
		}
	}

	public function restarVida($vida)
	{
		$this->vida -= $vida;
	}

	public function recolectar($arbol)
	{
		$madera = $arbol->talar();
		$this->materiales += $madera;
	}
}
