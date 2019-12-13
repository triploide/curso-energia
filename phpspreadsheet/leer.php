<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

//Creo el lector
$reader = IOFactory::createReader('Xlsx');

//Le indico el archivo a leer
$file = $reader->load('pozos.xlsx');

//Indicamos en que hoja vamos a trabajar
$sheet = $file->getActiveSheet(); //hoja activa del documento

//también existe:
//$file->getSheet(0); //número de hoja empezando por el cero
//$file->getSheetByName('Nombre de la hoja');

$result = [];

//Iteramos sobre cada fila
foreach ($sheet->getRowIterator(0, 1) as $row) {
	$data = [];
	$columnIterator = $row->getCellIterator('A', 'M');

	$column = $columnIterator->current(); //pido la primer columna (acá en el excel es donde figura el año)

	if ($index = $column->getCalculatedValue()) { //si la primer columna tiene valor (es decir si hay un año en esta fila)
		foreach ($columnIterator as $column) { //entonces iteror cada columna y la guardo en el array de datos
			$data[] = $column->getCalculatedValue();
		}
		$result[] = $data;
	}
}

echo '<pre>';

print_r($result);

