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
    return view('home');
});

Route::get('home', function() {
	return view('home');
});

Route::get('quienes_somos', function() {
	return view('quienes_somos');
});

Route::get('soluciones', function() {
	return view('soluciones');
});

Route::get('equipo', function() {
	return view('equipo');
});

Route::get('casos_exito', function() {
	return view('casos_exito');
});

Route::get('contactenos', function() {
	return view('contactenos');
});
