<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function vistaConInfo()
    {
    	$title = 'Nuevo título';
    	$items = [
    		'uno',
    		'dos',
    		'tres',
    	];

    	return view('vista-con-info', [
    		'titulo' => $title,
    		'items' => $items
    	]);
    }

    public function rutaConParametros($autor, $fecha=null)
    {
    	$title = 'Nuevo título';
    	$items = [
    		'uno',
    		'dos',
    		'tres',
    	];

    	if ($fecha == null) {
    		$fecha = date('d-m-Y');
    	}

    	$footer = $autor . ' - ' . $fecha;

    	return view('vista-con-info', [
    		'titulo' => $title,
    		'items' => $items,
    		'footer' => $footer
    	]);
    }
}
