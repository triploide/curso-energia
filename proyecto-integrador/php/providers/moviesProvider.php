<?php

use Base\Movie;

require_once __DIR__ . '/../config.php';
require_once '../classes/Table.php';
require_once '../classes/Movie.php';
require_once '../classes/MySQLDB.php';

$recordsFiltered = Movie::findAll($_GET['length'], $_GET['start']);
$data = Movie::findAll();

$response = [
	'recordsTotal' => count($data),
	'recordsFiltered' => count($data),
	'data' => $recordsFiltered
];

header('Content-type: application/json');
echo json_encode($response);
