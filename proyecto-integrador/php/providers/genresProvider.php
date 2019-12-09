<?php

use Base\Genre;

require_once __DIR__ . '/../config.php';
require_once '../classes/Table.php';
require_once '../classes/Genre.php';
require_once '../classes/MySQLDB.php';

$recordsFiltered = Genre::findAll($_GET['length'], $_GET['start']);
$data = Genre::findAll();

$response = [
	'recordsTotal' => count($data),
	'recordsFiltered' => count($data),
	'data' => $recordsFiltered
];

header('Content-type: application/json');
echo json_encode($response);
