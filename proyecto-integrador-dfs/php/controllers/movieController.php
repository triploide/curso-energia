<?php
print_r($_FILES);
die();
use Base\Movie;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

//editar fecha (Datepicker - Carbon - composer)
/*$stmt = $pdo->prepare('SELECT * from movies WHERE id = :id');
	$stmt->execute([':id' => $_GET['id']]);
	$movie = $stmt->fetch(PDO::FETCH_ASSOC);*/
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../conn.php';
require_once '../classes/Table.php';
require_once '../classes/Movie.php';
require_once '../classes/MySQLDB.php';
require_once __DIR__ . '/../../vendor/autoload.php';


//s$image = Image::configure(array('driver'=>'gd'));
$image = Image::make($_FILES['banner']['tmp_name']);
/*
$image->resize(null, 100, function ($constraint) {
	$constraint->aspectRatio();
});*/

$image->fit(900, 600);
$image->insert($CONFIG['filesystem']['images'] . 'watermark.png', 'center');
$nombre = uniqid() . '.jpg';
$image->save($CONFIG['filesystem']['path'] . 'movies/' . $nombre);


exit;
var_dump($_POST['release_date']);
$hoy = Carbon::createFromFormat('d/m/Y', $_POST['release_date']);

echo ("<br>");
var_dump($hoy->format('Y-m-d h:i:s'));
//var_dump(); con la fecha como viene del form
//var_dump(); con la fecha lista para mysql




//crear y editar
