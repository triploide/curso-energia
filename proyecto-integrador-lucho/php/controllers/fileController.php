<?php

use Base\File;
use Base\Movie;
use Carbon\Carbon;

require_once __DIR__ . '/../config.php';
require_once '../classes/Table.php';
require_once '../classes/Movie.php';
require_once '../classes/File.php';
require_once '../classes/MySQLDB.php';
require_once __DIR__ . '/../../vendor/autoload.php';

$file = File::find($_POST['id']);
$file->delete();

