<?php

require "conn.php";
$id = '1';


$stmt = $pdo->prepare('
	SELECT COUNT(m.id) as data, g.name as label
	FROM movies m
	right join genres g ON m.genre_id = g.id
	where m.id = :id
	GROUP BY label
');

print_r($stmt);

$stmt->execute([':id' => $id ]);

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

