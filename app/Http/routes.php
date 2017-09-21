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

Route::get('/inicio', 'AdministradorController@index');
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
Route::resource('/cotizado','CotizadoController');
Route::resource('/perdida','PerdidaController');
Route::resource('/finalizado','FinalizadoController');
Route::resource('/realizado','RealizadoController');

Route::resource('/f4','F4Controller');
Route::get('descargar_f4/{id}','F4Controller@descargar_f4');

Route::resource('/f5','F5Controller');
Route::get('descargar_f5','F5Controller@descargar_f5');

Route::resource('/pdf','PdfController');
Route::get('/pdf2','PdfController@index2');
Route::get('/pdf3','PdfController@index3');
Route::get('/pdf4','PdfController@index4');
Route::get('/pdf5','PdfController@index5');
Route::get('/','PdfController@index6');
Route::get('/crear_reporte_equipos/{tipo}','PdfController@crear_reporte_equipos');
Route::get('/crear_reporte_equipos2/{tipo}','PdfController@crear_reporte_equipos2');
Route::get('/crear_reporte_equipos3/{tipo}','PdfController@crear_reporte_equipos3');
Route::get('/crear_reporte_equipos4/{tipo}','PdfController@crear_reporte_equipos4');
Route::get('/crear_reporte_comunas/{tipo}','PdfController@crear_reporte_comunas');
Route::get('/crear_reporte_equipos6/{tipo}','PdfController@crear_reporte_equipos6');

