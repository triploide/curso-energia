<?php

class Triste
{
	public function comer($tamagochi)
	{
		echo 'Bip<br>';
	}

	public function mimos($tamagochi)
	{
		$contento = new Contento;
		$tamagochi->setEstado($contento);
		echo '¡Ahora estoy contento!<br>';
	}

	public function ignorar($tamagochi)
	{
		echo '¡Estoy triste!<br>';
	}
}
