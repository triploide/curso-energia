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
	WHERE title like :search and genre_id = :genre_id
	ORDER BY ' . $order . ' ' . $dir . '
	LIMIT :length
	OFFSET :start
');
$stmtData->bindValue(':length', $_GET['length'], PDO::PARAM_INT);
$stmtData->bindValue(':start', $_GET['start'], PDO::PARAM_INT);
$stmtData->bindValue(':genre_id', $_GET['genre_id'], PDO::PARAM_INT);
$stmtData->bindValue(':search', $_GET['search']['value'] . "%", PDO::PARAM_STR);

$stmtData->execute();
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
	WHERE title like :search and genre_id = :genre_id
');
$stmtFiltered->execute([
	':search' => $_GET['search']['value'] . "%",
	':genre_id' => $_GET['genre_id'],
]);
$filtered = $stmtFiltered->fetchColumn();

$data = [
	'recordsTotal' => $total,
	'recordsFiltered' => $filtered,
	'data' => $resultados
];

header('Content-type: application/json');
echo json_encode($data);

