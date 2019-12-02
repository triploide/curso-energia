<?php

use Base\File;
use Base\Movie;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../conn.php';
require_once '../classes/Table.php';
require_once '../classes/Movie.php';
require_once '../classes/File.php';
require_once '../classes/MySQLDB.php';
require_once '../classes/Uploader.php';
require_once __DIR__ . '/../../vendor/autoload.php';

var_dump($_FILES['banner']); exit;



/*
$image->resize(null, 100, function ($constraint) {
	$constraint->aspectRatio();
});*/
//$image->crop(100, 200);
//$image->with(); // getter
//$image->height(); // getter
//$image->blur();
//$image->insert('path/a/otra/image.jpg');


//Agregar la columna banner en la table movies
//Persistir el nombre de imagen en la base

/*
if (isset($_FILES['banner']) && $_FILES['banner']['error'] == UPLOAD_ERR_OK) {
	$image = Image::make($_FILES['banner']['tmp_name']);
	$image->fit(900, 600);
	$image->insert($CONFIG['filesystem']['images'] . 'watermark.png', 'center');
	$ext = pathinfo($_FILES['banner']['name'], PATHINFO_EXTENSION);
	$banner = uniqid() . '.' . $ext;
	$image->save($CONFIG['filesystem']['path'] . 'movies/' . $banner);
}
*/

if ($_POST['id']) {
	$movie = new Movie;
	$movie->find($_POST['id']);
} else {
	$movie = new Movie;
}

$fecha = Carbon::createFromFormat('d-m-Y', $_POST['release_date']);
$movie->setColumna('title', $_POST['title']);
$movie->setColumna('rating', $_POST['rating']);
$movie->setColumna('length', $_POST['length']);
$movie->setColumna('release_date', $fecha->format('Y-m-d'));
//$movie->setColumna('banner', $banner);
$movie->save();


$uploader = new Uploader();
$data = $uploader->upload($_FILES['banner'], [
    'limit' => 10, //Maximum Limit of files. {null, Number}
    'maxSize' => 10, //Maximum Size of files {null, Number(in MB's)}
    'extensions' => null, //Whitelist for file extension. {null, Array(ex: array('jpg', 'png'))}
    'required' => false, //Minimum one file is required for upload {Boolean}
    'uploadDir' => __DIR__ . '/../../uploads/', //Upload directory {String}
    'title' => '{{timestamp}}', //New file name {null, String, Array} *please read documentation in README.md
    'removeFiles' => true, //Enable file exclusion {Boolean(extra for jQuery.filer), String($_POST field name containing json data with file names)}
    'replace' => true, //Replace the file if it already exists  {Boolean}
    'perms' => null, //Uploaded file permisions {null, Number}
    'onCheck' => null, //A callback function name to be called by checking a file for errors (must return an array) | ($file) | Callback
    'onError' => null, //A callback function name to be called if an error occured (must return an array) | ($errors, $file) | Callback
    'onSuccess' => null, //A callback function name to be called if all files were successfully uploaded | ($files, $metas) | Callback
    'onUpload' => null, //A callback function name to be called if all files were successfully uploaded (must return an array) | ($file) | Callback
    'onComplete' => null, //A callback function name to be called when upload is complete | ($file) | Callback
    'onRemove' => null //A callback function name to be called by removing files (must return an array) | ($removed_files) | Callback
]);

//echo '<pre>';
//print_r($data); exit;

if($data['hasErrors']){
    $errors = $data['errors'];
    print_r($errors);
}

if($data['isComplete']) {
    foreach ($data['data']['metas'] as $meta) {
        $file = new File;
        $file->setColumna('extension', $meta['extension']);
        $file->setColumna('name', $meta['name']);
        $file->setColumna('old_name', $meta['old_name']);
        $file->setColumna('size', $meta['size']);
        $file->setColumna('human_size', $meta['size2']);
        $file->setColumna('type', $meta['type'][0] . '/' . $meta['type'][1]);
        $file->setColumna('movie_id', $_POST['id']);
        $file->save();
    }
}

//header('location: ../../movies');
