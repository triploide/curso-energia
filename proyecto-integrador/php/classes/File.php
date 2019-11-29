<?php

namespace Base;

class File extends Table
{
	protected $nombre = 'files';
	protected $columnas = ['extension', 'name', 'old_name', 'size', 'human_size', 'type'];
	protected $dates = [];
	protected $id;
}
