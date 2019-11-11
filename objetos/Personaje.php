<?php

class Personaje
{
	private $x;
	private $y;

	function __construct()
	{
		$this->x = 0;
		$this->y = 0;
	}

	public function mover($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}
}