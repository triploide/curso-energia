<?php

require "conn.php";

$columns = ['name', 'ranking'];
$order = $columns[$_GET['order'][0]['column']];
$dir = $_GET['order'][0]['dir'];

//data
$stmtData = $pdo->prepare('
	SELECT name, ranking
	FROM genres
	
	WHERE name like :search
	ORDER BY '. $order .' ' . $dir . '
	LIMIT '. $_GET['length'] .'
	OFFSET '. $_GET['start'] .'
');
$stmtData->execute([
	':search' => $_GET['search']['value'] . "%",
]);
$resultados = $stmtData->fetchAll(PDO::FETCH_ASSOC);

//total
$stmtTotal = $pdo->prepare('
	SELECT COUNT(genres.id) as total
	FROM genres
	
');
$stmtTotal->execute();
$total = $stmtTotal->fetchColumn();

//total
$stmtFiltered = $pdo->prepare('
	SELECT COUNT(genres.id) as total
	FROM genres
	
	WHERE name like :search
');
$stmtFiltered->execute([
	':search' => $_GET['search']['value'] . "%"
]);
$filtered = $stmtFiltered->fetchColumn();

$data = [
	'recordsTotal' => $total,
	'recordsFiltered' => $filtered,
	'data' => $resultados
];

header('Content-type: application/json');
echo json_encode($data);

