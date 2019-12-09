<?php

use Base\Genre;

require_once __DIR__ . '/../config.php';
require_once '../classes/Table.php';
require_once '../classes/genre.php';
require_once '../classes/MySQLDB.php';
$data = Genre::findAll();

$response = [
	'recordsTotal' => count($data),
	'recordsFiltered' => count($data),
	'data' => $data
];

header('Content-type: application/json');
echo json_encode($response);
