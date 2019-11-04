<?php

require "conn.php";


//where genre_id IS NOT NULL

$stmt = $pdo->prepare('
	SELECT COUNT(genre_id) as data, genres.name as label
	FROM movies
	INNER JOIN genres ON genres.id = movies.genre_id
	WHERE release_date >= :fecha
	AND rating >= :rating
	GROUP BY label
');

$stmt->execute([
	':fecha' => $_GET['fecha'],
	':rating' => $_GET['rating'],
]);

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

$data = [
	'labels' => [],
	'data' => []
];

foreach ($resultados as $resultado) {
	$data['labels'][] = $resultado['label'];
	$data['data'][] = $resultado['data'];
}

header('Content-type: application/json');
echo json_encode($data);

