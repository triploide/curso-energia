<?php

class Hambre
{
	public function comer($tamagochi)
	{
		$contento = new Contento;
		$tamagochi->setEstado($contento);
		echo '¡Ahora estoy contento!<br>';
	}

	public function mimos($tamagochi)
	{
		
		echo '¡Bip de contento!<br>';
	}

	public function ignorar($tamagochi)
	{
		echo '¡Bip de hambre!<br>';
	}
}
