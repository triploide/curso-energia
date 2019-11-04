<?php

require "conn.php";

$stmt = $pdo->prepare('
	SELECT COUNT(genre_id) as data, name as label
	FROM movies
	inner join genres on genres.id=movies.genre_id
	GROUP BY label
');

$stmt->execute();

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

$data = [
	'labels' => [],
	'data' => []
];

foreach ($resultados as $resultado) {
	$data['labels'][] = 'Genero ' . $resultado['label'];
	$data['data'][] = $resultado['data'];
}

header('Content-type: application/json');
echo json_encode($data);

