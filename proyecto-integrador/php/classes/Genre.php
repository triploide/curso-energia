<?php

namespace Base;

class Genre extends Table
{
	protected $nombre = 'genres';
	protected $columnas = ['name', 'raking', 'active'];
	protected $dates = ['created_at'];
}
