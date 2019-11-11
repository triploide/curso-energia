<?php

class Aldeano extends Personaje
{
	private $vida;
	private $ataque;
	
	function __construct()
	{
		parent::__construct();
		$this->vida = 10;
		$this->ataque = 1;
	}

	public function getVida()
	{
		return $this->vida;
	}
}
