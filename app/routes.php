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

Route::resource('usuarios','UsuariosController');
/*
Route::get('usuarios/create', array('uses' => 'UsuariosController@create'));
Route::post('usuarios/store',array('uses' => 'UsuariosController@store'));
Route::get('usuarios', array('uses' => 'UsuariosController@show'));
Route::get('usuarios/edit',array('uses' => 'UsuariosController@edit'));
Route::put('usuarios/update',array('uses' => 'UsuariosController@update'));
Route::get('usuarios/{id}', array('uses'=>'UsuariosController@verUsuario'));
*/
Route::get('contacto', array('uses' => 'ContactoController@contacto'));
Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::resource('notices', 'NoticeController');
