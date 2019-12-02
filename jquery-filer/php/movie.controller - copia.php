<?php

use Base\File;
require_once 'Uploader.php';

require_once __DIR__ . '/../../proyecto-integrador/php/config.php';
require_once __DIR__ . '/../../proyecto-integrador/php/classes/Table.php';
require_once __DIR__ . '/../../proyecto-integrador/php/classes/File.php';
require_once __DIR__ . '/../../proyecto-integrador/php/classes/MySQLDB.php';

$uploader = new Uploader();
$data = $uploader->upload($_FILES['files'], [
    'limit' => 10, //Maximum Limit of files. {null, Number}
    'maxSize' => 10, //Maximum Size of files {null, Number(in MB's)}
    'extensions' => null, //Whitelist for file extension. {null, Array(ex: array('jpg', 'png'))}
    'required' => false, //Minimum one file is required for upload {Boolean}
    'uploadDir' => __DIR__ . '/../uploads/', //Upload directory {String}
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
        $file->save();
    }
}
