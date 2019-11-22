<?php

namespace Age;

class Aldeano extends Personaje
{
	private $vida;
	private $ataque;
	private $madera;
	
	function __construct()
	{
		parent::__construct();
		$this->vida = 10;
		$this->ataque = 1;
		$this->madera = 0;
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


public function recolectarMadera($arbol)
	{
		$madera=$arbol->talar();
		$this->madera +=$madera;

	}


	public function restarVida($vida)
	{
		$this->vida -= $vida;
	}

}
