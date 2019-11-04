<?php

require "conn.php";

$columns = ['title', 'rating', 'genre'];
$order = $columns[$_GET['order'][0]['column']];
$dir = $_GET['order'][0]['dir'];

//data
$stmtData = $pdo->prepare('
	SELECT title, rating, genres.name as genre
	FROM movies
	INNER JOIN genres on genres.id = movies.genre_id
	WHERE title like :search
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
	SELECT COUNT(movies.id) as total
	FROM movies
	INNER JOIN genres on genres.id = movies.genre_id
');
$stmtTotal->execute();
$total = $stmtTotal->fetchColumn();

//total
$stmtFiltered = $pdo->prepare('
	SELECT COUNT(movies.id) as total
	FROM movies
	INNER JOIN genres on genres.id = movies.genre_id
	WHERE title like :search
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

