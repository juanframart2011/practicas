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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function (){

    return view("bootstrap");
});

Route::get("/api/animals", function() {
    
    return response()->json([
    	['name' => 'dog'],
    	['name' => 'cat'],
    	['name' => 'elephant'],
    	['name' => 'elk'],
    	['name' => 'spider']
    ]);
});