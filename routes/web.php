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

Route::get('/ilustraciones', function(){
    return view('IntUsers.ilustraciones.lonely');
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
Route::get('/myprofile','ProfilesController@myProfile')->name('my.profile');
Route::get('/user/{usuario}/profile','ProfilesController@profileUser')->name('profile.user');
//
//Ilustraciones
//
Route::resource('/misIlustraciones','IlustracionesController');
Route::get('/draw/{ilustracion}/view','IlustracionesController@consultarIlustracion');
Route::get('/draws/{categoria}/view','IlustracionesController@busquedaxCategoria');
Route::get('/tag/{tag}/view','IlustracionesController@busquedaxEtiqueta');
Route::get('/busqueda/','IlustracionesController@busquedaxPalabra');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

