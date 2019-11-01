<?php

require "conn.php";

$stmt = $pdo->prepare('
	SELECT COUNT(id) as data, CAST(rating as UNSIGNED) as label
	FROM movies
	GROUP BY label
');

$stmt->execute();

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

