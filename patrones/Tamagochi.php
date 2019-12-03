<?php

class Tamagochi
{
	private $estado;
	private $vida;

	function __construct()
	{
		$this->estado = new Triste;
		$this->vida = true;
	}

	public function setEstado($estado)
	{
		$this->estado = $estado;
	}

	public function setVida($vida)
	{
		$this->vida = $vida;
	}

	public function comer()
	{
		if ($this->vida) {
			$this->estado->comer($this);
		}
	}

	public function mimos()
	{
		if ($this->vida) {
			$this->estado->mimos($this);
		}
	}

	public function ignorar()
	{
		if ($this->vida) {
			$this->estado->ignorar($this);
		}
	}
}
