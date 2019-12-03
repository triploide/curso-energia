<?php

namespace Base;

class Movie extends Table
{
	protected $nombre = 'movies';
	protected $columnas = ['title', 'length', 'release_date', 'rating', 'banner'];
	protected $id;
	public function files()
	{
		if ($this->id){
		$sql = 'SELECT * from files where movie_id = ' . $this->id;

		//echo ($sql);
		$stmt = $this->base->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
				}else{

					return [];
				}
	}
}
