<?php

namespace Base;

class Genre extends Table
{
	protected $nombre = 'genres';
	protected $columnas = ['name', 'ranking', 'activa'];
	protected $dates = ['created_at'];
}
