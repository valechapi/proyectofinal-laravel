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

Route::get('/inicio', function () {
    return view('index');
});

Route::get('/', 'MiControlador@index');

Route::get('/login', 'MiControlador@login');

Route::get('/registro', 'MiControlador@registro');

Route::get('/faq', 'MiControlador@faq');

Route::get('/productos/listado', 'ProductoController@listar');
Route::get('/productos/agregar', 'ProductoController@agregar');
Route::post('/productos/agregar', 'ProductoController@guardar');
Route::get('/categorias/listado', 'CategoriaController@listar');
