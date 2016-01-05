<?php 
class NoticeController extends BaseController {

    public function mostrarNoticias()
    {
        if (Auth::check())
        {
            $usuarios = Usuario::all();
            return View::make('usuarios.lista', array('usuarios' => $usuarios));
        }
        else
            return Redirect::to('login');      
    }

    public function nuevaNoticia()
    {
        if (Auth::check())
            return View::make('usuarios.crear');
         else
            return Redirect::to('login');
    }

    public function crearNoticia()
    {
        if(Auth::check())
        {
            Usuario::create(Input::all());
            return Redirect::to('usuarios');
        }
        else
            return Redirect::to('login');

    }

    public function verNoticia($id)
    {
        if (Auth::check())
        {
            $usuario = Usuario::find($id);
            return View::make('usuarios.ver',array('usuario'=> $usuario));
        }
        else
            return Redirect::to('login');


    }

}
?>