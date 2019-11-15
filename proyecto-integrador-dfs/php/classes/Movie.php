<?php

namespace Base;

class Movie extends Table
{
	protected $nombre = 'movies';
	protected $columnas = ['title', 'length', 'release_date', 'rating'];
	protected $id;
}
