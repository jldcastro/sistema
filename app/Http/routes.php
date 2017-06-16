<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('/login','LoginController');
Route::get('logout','LoginController@logout');

Route::get('/administrador', 'AdministradorController@index');
Route::resource('/usuario', 'UsuarioController');
Route::get('asignar_rol/{idusu}/{idrol}', 'UsuarioController@asignar_rol');
Route::get('quitar_rol/{idusu}/{idrol}', 'UsuarioController@quitar_rol');
Route::post('editar_acceso', 'UsuarioController@editar_acceso');
Route::post('asignar_permiso', 'UsuarioController@asignar_permiso');
Route::get('quitar_permiso/{idrol}/{idper}', 'UsuarioController@quitar_permiso');
Route::resource('/cliente', 'ClienteController');

Route::resource('/rol','RolController');

Route::resource('/permiso', 'PermisoController');

//Rutas tipo equipo
Route::resource('/tipo_equipo', 'TipoEquipoController');
//Rutas marcas
Route::resource('/marca', 'MarcaController');
//Rutas modelos
Route::resource('/modelo', 'ModeloController');
//Rutas tipos
Route::resource('/tipo', 'TipoController');
//Rutas materiales
Route::resource('/material', 'MaterialController');
//Rutas unidades
Route::resource('/unidad', 'UnidadController');
//Rutas condiciones
Route::resource('/condicion', 'CondicionController');
//Rutas f37
Route::resource('/f37', 'F37Controller');
Route::get('/f37/marcas/{id}', 'F37Controller@getMarcas');
Route::get('/f37/modelos/{id}', 'F37Controller@getModelos');
Route::get('/f37/tipos/{id}', 'F37Controller@getTipos');
Route::get('/f37/unidades/{id}', 'F37Controller@getUnidades');
Route::get('/f37/condiciones/{id}', 'F37Controller@getCondiciones');
Route::get('/f37/materiales/{id}','F37Controller@getMateriales');
Route::get('/f37/marcas/{id}', 'F37Controller@getMarcas');

Route::resource('/valorizado','ValorizadoController');
Route::resource('/getValorizadoReport','ValorizadoController@getValorizadoReport');

Route::resource('/cotizado','CotizadoController');

Route::resource('/coordinado','CoordinadoController');

Route::resource('/f4','F4Controller');