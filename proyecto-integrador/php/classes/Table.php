<?php

namespace Base;

require_once __DIR__ . '/../config.php';

class Table
{
	protected $nombre;
	protected $columnas;
	protected $valores = [];
	public $id;
	protected $base;

	public function __construct()
	{
		global $CONFIG;
		extract($CONFIG['database']);
		$this->base = new MySQLDB($host, $name, $user, $password);
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function getColumnas()
	{
		return $this->columnas;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getColumna($columna)
	{
		return $this->valores[$columna] ?? '';
	}

	public function setColumna($columna, $valor)
	{
		if (in_array($columna, $this->columnas)) {
			$this->valores[$columna] = $valor;
		}
	}

	public function hydrate($data)
	{
		foreach ($this->columnas as $columna) {
			if (isset($data[$columna])) {
				$this->setColumna($columna, $data[$columna]);
			}
		}
		$this->id = $data['id'];
	}

	public function save()
	{
		$this->base->save($this);
	}

	public function delete()
	{
		$this->base->delete($this);
	}

	public static function find($id)
	{
		$class = get_called_class();
		$movie = new $class;
		$data = $movie->base->find($id, $movie);
		$movie->hydrate($data);
		$movie->id = $id;
		return $movie;
	}

	public function __get($atributo)
	{
		$valor = $this->getColumna($atributo);

		if (in_array($atributo, $this->dates) && $valor) {
			$valor = \Carbon\Carbon::createFromFormat('Y-m-d h:i:s', $valor);
			$valor = $valor->format('d-m-Y');
		}

		return $valor;
	}

	/*
	public function __set($atributo, $valor)
	{
		var_dump($atributo, $valor);
	}
	*/
}
