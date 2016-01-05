<?php 
class PerfilController extends BaseController {

    public function verPerfil()
    {
        if (Auth::check())
        {
        	$id=Auth::id();
        	$usuario = Usuario::find($id);
            return View::make('usuarios.perfil',array('usuario'=> $usuario));
        }
        else
            return Redirect::to('login');      
    }
}
?>