<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'NotasController@notas'); 
Route::get('/mostrar_notas', 'NotasController@mostrarNotas'); 
Route::post('/guardar_nota', 'NotasController@guardarNota'); 
Route::post('eliminar_nota', 'NotasController@eliminarNota');