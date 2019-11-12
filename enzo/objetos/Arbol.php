<?php

namespace Age;
/**
 * 
 */
class Arbol
{
	private $madera;

	function __construct()
	{
		$this->madera = 100;
	}

	public function Talar($aldeano)
	{
		while ($this->madera>0) {
			$materiales=$aldeano->getMateriales();
			$materiales['madera']++;
			$aldeano->setMateriales($materiales);
			$this->madera--;
		}
	}

	public function GetMadera()
	{
		return $this->madera;
	}
}

?>