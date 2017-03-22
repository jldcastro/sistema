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

Route::resource('/administrador', 'AdministradorController');
Route::get('/towns/{id}', 'StateController@getTowns');
Route::resource('/login', 'LoginController');
Route::resource('/states', 'StateController');

//Rutas marcas
Route::resource('/marca', 'MarcaController');
