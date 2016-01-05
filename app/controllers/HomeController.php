<?php

class HomeController extends BaseController {

	public function showLogin()
	{
	    return View::make('login');
	}

	public function doLogin()
	{
		// la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos.
	    if (Auth::attempt( array('correo' => Input::get('correo'), 'password' => Input::get('password') ), true )){
	        return Redirect::to('usuarios');
	    }else{
	        return Redirect::to('login')->with('mensaje_login', 'Ingreso inválido - Datos erróneos');
	    }
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('login');
	}


}
