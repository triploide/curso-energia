<?php

class Contento
{
	public function comer($tamagochi)
	{
		$tamagochi->setVida(false);
		echo 'RIP<br>';
	}

	public function mimos($tamagochi)
	{
		echo 'Bip<br>';
	}

	public function ignorar($tamagochi)
	{
		echo '...<br>';
	}
}
