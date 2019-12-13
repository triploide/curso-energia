<?php

require '../../vendor/autoload.php';
require_once '../../php/config.php';
require_once '../classes/Table.php';
require_once '../classes/Genre.php';
require_once '../classes/MySQLDB.php';

use Base\Genre;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$genres = Genre::findAll();

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'id');
$sheet->setCellValue('B1', 'género');
$sheet->setCellValue('C1', 'ranking');
$sheet->setCellValue('D1', 'activo');

$row = 2;
foreach ($genres as $genre) {
	$sheet->setCellValue("A$row", $genre['id']);
	$sheet->setCellValue("B$row", $genre['name']);
	$sheet->setCellValue("C$row", $genre['ranking']);
	$sheet->setCellValue("D$row", $genre['activa'] ? 'Si': 'No');
	$row++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('genres.xlsx');
