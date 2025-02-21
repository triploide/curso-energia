<?php

namespace Base;

class MySQLDB
{
	public $conn;

	function __construct($host, $db, $user, $password)
	{
		try {
			$this->conn = new \PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
			$this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function findAll($registro, $limit=null, $offset=null)
	{
		$sql = 'SELECT * FROM ' . $registro->getNombre() . ' WHERE activa = 1';
		if ($limit !== null) $sql .= ' LIMIT ' . $limit;
		if ($offset !== null) $sql .= ' OFFSET ' . $offset;
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function find($id, $registro)
	{
		$sql = 'SELECT * FROM ' . $registro->getNombre() . " WHERE id = $id AND activa = 1 LIMIT 1";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetch(\PDO::FETCH_ASSOC);
	}

	public function save($registro)
	{
		if ($registro->getId()) {
			return $this->update($registro);
		} else {
			return $this->insert($registro);
		}
	}

	private function insert($registro)
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

		$stmt->execute($valores);
	}

	private function update($registro)
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

		$stmt->execute($valores);
	}

	public function delete($registro)
	{
		$sql = "UPDATE ". $registro->getNombre() ." SET activa = 0 WHERE id = " . $registro->getId();
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
	}
}