<?php
namespace Base;
require_once __DIR__ . '/../config.php';

class Form
{
	public static function select($name, $options, $valorActual=null)
	{
		//if ($valorActual == $key) $selected = 'selected';

		return '<select name="$name">
		foreach ($options as $key => $option) 
		{ <option value="$key" $selected>$value</option> } 
		</select>';
	}
}

$form = new Form;
$form->accion();

$options = [
	1 => 'Acción',
	2 => 'Aventura',
	3 => 'Terror',
]

Form::select('genre_id', $options, $movie->genre_id)

