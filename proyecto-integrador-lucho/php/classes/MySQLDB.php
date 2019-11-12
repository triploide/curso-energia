<?php

namespace Base;

class MySQLDB
{
	private $conn;

	function __construct($host, $db, $user, $password)
	{
		try {
			$this->conn = new \PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
			$this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function findAll()
	{
		# code...
	}

	public function find($id)
	{
		# code...
	}

	public function save($registro)
	{
		if ($registro->getId()) {
			return $this->update($registro);
		} else {
			return $this->insert($registro);
		}
	}

	public function update($registro)
	{
		$columnas = $registro->getColumnas();

		$sql = 'UPDATE '. $registro->getNombre() .' SET ';

		foreach ($columnas as $columna) {
			$sql .= "$columna = :$columna, ";
		}

		$sql = trim($sql, ', ');
		$sql .= ' WHERE id = ' . $registro->getId();
		$stmt = $this->conn->prepare($sql);

		$valores = [];
		foreach ($columnas as $columna) {
			$valores[":$columna"] = $registro->getColumna($columna);
		}

		echo '<pre>';
		var_dump($sql, $valores);

		$stmt->execute($valores);
	}

	public function insert($registro)
	{
		$columnas = $registro->getColumnas();

		$sql = 'INSERT INTO '. $registro->getNombre();

		$sql .= "(";
		foreach ($columnas as $columna) {
			$sql .= "$columna, ";
		}

		$sql = trim($sql, ', ');
		$sql .= ") values ";

		$sql .= "(";
		foreach ($columnas as $columna) {
			$sql .= ":$columna, ";
		}

		$sql = trim($sql, ', ');
		$sql .= ") ";
		$stmt = $this->conn->prepare($sql);

		$valores = [];
		foreach ($columnas as $columna) {
			$valores[":$columna"] = $registro->getColumna($columna);
		}

		echo '<pre>';
		var_dump($sql, $valores);

		$stmt->execute($valores);
	}

	public function delete($registro)
	{
		# code...
	}
}