<?php

require "conn.php";


//where genre_id IS NOT NULL

$stmt = $pdo->prepare('
	SELECT COUNT(id) as data, CAST(rating as UNSIGNED) as label
	FROM movies
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
	$data['labels'][] = 'Rating ' . $resultado['label'];
	$data['data'][] = $resultado['data'];
}

header('Content-type: application/json');
echo json_encode($data);

