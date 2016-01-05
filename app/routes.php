<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return Redirect::to('login');
});

Route::get('usuarios', array('uses' => 'UsuariosController@mostrarUsuarios'));
Route::get('usuarios/nuevo', array('uses' => 'UsuariosController@nuevoUsuario'));
Route::post('usuarios/crear',array('uses' => 'UsuariosController@crearUsuario'));
Route::get('usuarios/{id}', array('uses'=>'UsuariosController@verUsuario'));

Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));