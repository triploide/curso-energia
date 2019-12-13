<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$events = [
	[
		'title' => 'Quo adipisci repellat quaerat quibusdam illum totam sit.',
		'date' => '2019-12-14 18:00:00',
		'address' => '875 Jazmyne Plains - Lake Elmershire, NH 24798'
	],
	[
		'title' => 'Recusandae tenetur quos velit sapiente ut laboriosam ipsa.',
		'date' => '2019-12-14 19:30:00',
		'address' => '457 Marcelino Row Suite 211 - North Serena, AL 18230'
	],
	[
		'title' => 'Magnam vitae reprehenderit cum mollitia omnis delectus quos sint.',
		'date' => '2019-12-16 15:00:00',
		'address' => '9637 Kemmer Alley - Paucekchester, UT 10959-2505'
	],
	[
		'title' => 'Debitis quidem numquam praesentium qui ut veniam rerum ipsum.',
		'date' => '2019-12-22 20:00:00',
		'address' => '5647 Reinger Skyway - Port Elena, WA 86387'
	],
	[
		'title' => 'Illo dolore odit praesentium eum quas aut.',
		'date' => '2019-12-23 18:00:00',
		'address' => '7792 Dusty Street - East Maya, OH 68770-6910'
	],
];

$row = 1;
$spreadsheet = new Spreadsheet();

foreach ($events as $event) {
	$column = 'A';
	foreach ($event as $value) {
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue($column.$row, $value);
		$column++;
	}
	$row++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('events.xlsx');
