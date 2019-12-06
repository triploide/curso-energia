<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('laravel', function () {
	return 'Hola Laravel';
});

Route::get('ejemplo', function () {
	return view('ejemplo');
});

Route::get('vista-con-info', 'EjemploController@vistaConInfo');
Route::get('ruta-con-parametros/{autor}/{fecha?}', 'EjemploController@rutaConParametros');




Route::get('eventos', 'EventController@index');
Route::get('categoria/create', 'CategoryController@create');
Route::get('categoria/{id}', 'CategoryController@show');













