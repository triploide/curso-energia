<?php

namespace Base;

class Movie extends Table
{
	protected $nombre = 'movies';
	protected $columnas = ['title', 'length', 'release_date', 'rating','banner'];
	protected $id;
	protected $filesInputName = 'banner';
	protected $filesDir = 'movies';
	protected $filesWidth = 900;
	protected $filesHeight = 600;
	

	public function getFilesInputName()
	{
		return $this->filesInputName;
	}
	public function getFilesDir()
	{
		return $this->filesDir;
	}
	public function getFilesWidth()
	{
		return $this->filesWidth;
	}
	public function getFilesHeight()
	{
		return $this->filesHeight;
	}

}
