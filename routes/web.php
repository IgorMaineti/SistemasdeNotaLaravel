<?php

/*
//  Aqui é onde é feita todas as rotas usadas no site.
*/

Route::group(['middleware' => 'web'], function () {
	Route::get('/notas', 'NotasController@index');
	Route::get('/notas/novo', 'NotasController@novo');
	Route::get('notas/{nota}/editar', 'NotasController@editar');
	Route::post('/notas/salvar', 'NotasController@salvar');
	Route::patch('/notas/{nota}', 'NotasController@atualizar');
	Route::delete('/notas/{nota}', 'NotasController@deletar');
	Route::get('notas/mostrar', 'NotasController@mostrar');
	Route::get('/sobre', 'NotasController@sobre');
	Route::get('/materias', 'NotasController@materias');
	Route::get('/mercado', 'NotasController@mercado');
	Route::get('/welcome', 'NotasController@home');

});

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
