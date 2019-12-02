<?php

namespace Base;

class Movie extends Table
{
	protected $nombre = 'movies';
	protected $columnas = ['title', 'length', 'release_date', 'rating', 'banner'];
	protected $dates = ['release_date'];
	protected $id;

	public function files()
	{
		$sql = 'SELECT * from files where movie_id = ' . $this->id;
		$stmt = $this->base->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}
