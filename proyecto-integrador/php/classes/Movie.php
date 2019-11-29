<?php

namespace Base;

class Movie extends Table
{
	protected $nombre = 'movies';
	protected $columnas = ['title', 'length', 'release_date', 'rating', 'banner'];
	protected $dates = ['release_date'];
	protected $id;
}
