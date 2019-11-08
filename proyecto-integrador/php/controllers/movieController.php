<?php
require_once __DIR__ . '/../conn.php';



//editar fecha (Datepicker - Carbon - composer)
/*$stmt = $pdo->prepare('SELECT * from movies WHERE id = :id');
	$stmt->execute([':id' => $_GET['id']]);
	$movie = $stmt->fetch(PDO::FETCH_ASSOC);*/


if (isset($_POST['id'])) { 

	$stmt = $pdo->prepare('update movies 
					
         set title= :title,
          length= :length,
          rating= :rating,
          release_date= :release_date
          


		WHERE id = :id');
$stmt->execute([
		':title' => $_POST['title'],
		':length' => $_POST['length'],
		':rating' => $_POST['rating'],
		':release_date' => $_POST['release_date'],
		':id' => $_POST['id'],

	]);
	

	
} else { //editar

}

//crear y editar
