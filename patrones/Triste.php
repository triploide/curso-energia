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
		$hambre = new Hambre;
		$tamagochi->setEstado($hambre);
		echo '¡Ahora estoy con  hambre!<br>';
	}
}
