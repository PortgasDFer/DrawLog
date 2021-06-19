<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/top-ilustraciones', function() {
    return view('mejores');
});

//Rutas administrador
//
//Categorias
//
Route::resource('/categorias-admin','CategoriasController');
Route::get('/obtenerCategorias','CategoriasController@datatable')->name('datatable.categorias');
//
//Reportes Admin
//
Route::get('/reportes-admin','ReportesController@index')->name('reportes.index');
Route::get('/reporte','ReportesController@reporte')->name('reportes.reporte');


//
//Perfiles
//
Route::resource('/profiles','ProfilesController');
//
//Ilustraciones
//
Route::resource('/misIlustraciones','IlustracionesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

