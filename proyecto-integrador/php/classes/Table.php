<?php

namespace Base;

require_once __DIR__ . '/../config.php';

class Table
{
	protected $nombre;
	protected $columnas;
	protected $valores = [];
	protected $id;
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
		return $this->valores[$columna];
	}

	public function setColumna($columna, $valor)
	{
		if (in_array($columna, $this->columnas)) {
			$this->valores[$columna] = $valor;
		}
	}

	public function save()
	{
		$this->base->save($this);
	}
}
