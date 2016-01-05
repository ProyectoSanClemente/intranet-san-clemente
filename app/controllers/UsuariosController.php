<?php 
class UsuariosController extends BaseController {

    /**
     * Mustra la lista con todos los usuarios
     */
    public function mostrarUsuarios()
    {
        if (Auth::check())
        {
            $usuarios = Usuario::all();
            return View::make('usuarios.lista', array('usuarios' => $usuarios));
        }
        else
            return View::make('login');        
    }

    public function nuevoUsuario()
    {
        if (Auth::check())
            return View::make('usuarios.crear');
         else
            return View::make('login');
    }

    public function crearUsuario()
    {
        if(Auth::check())
        {
            Usuario::create(Input::all());
            return Redirect::to('usuarios');
        }
        else
            return View::make('login');

    }

    public function verUsuario($id)
    {
        if (Auth::check())
        {
            $usuario = Usuario::find($id);
            return View::make('usuarios.ver',array('usuario'=> $usuario));
        }
        else
            return View::make('login');


    }

}
?>