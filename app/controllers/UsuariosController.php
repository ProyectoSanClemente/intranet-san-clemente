<?php 
class UsuariosController extends BaseController {

    /**
     * Mustra la lista con todos los usuarios
     */
    public function mostrarUsuarios()
    {
        $usuarios = Usuario::all();
        return View::make('usuarios.lista', array('usuarios' => $usuarios));
     
    }

    public function nuevoUsuario()
    {
        return View::make('usuarios.crear');
    }

    public function crearUsuario()
    {
        Usuario::create(Input::all());
        return Redirect::to('usuarios');
    }
    
    public function verUsuario($id)
    {
        $usuario = Usuario::find($id);
        return View::make('usuarios.ver',array('usuario'=> $usuario));
    }

}
?>