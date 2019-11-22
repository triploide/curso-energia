<?php

require '../conn.php';

$stmt = $pdo->prepare('SELECT id, title, length FROM movies');
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$response = [
	'recordsTotal' => count($data),
	'recordsFiltered' => count($data),
	'data' => $data
];

header('Content-type: application/json');
echo json_encode($response);
