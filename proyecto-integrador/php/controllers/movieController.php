<?php

require_once __DIR__ . '/../conn.php';

//editar fecha (Datepicker - Carbon - composer)

$sql = '
	UPDATE movies
	SET
		title = :title,
		length = :length,
		rating = :rating,
		release_date = :release_date
	WHERE id = :id
';

if ($_POST['id']) { //editar
	$stmt = $pdo->prepare($sql);
	$stmt->execute([
		':title' => $_POST['title'],
		':length' => $_POST['length'],
		':rating' => $_POST['rating'],
		':release_date' => $_POST['release_date'],
		':id' => $_POST['id'],
	]);
} else { //crear

}

header('location: ../../movies');

//crear y editar
