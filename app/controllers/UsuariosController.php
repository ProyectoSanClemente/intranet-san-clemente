<?php 
class UsuariosController extends BaseController {

    /**
     * Mustra la lista con todos los usuarios
     */
    public function show()
    {
        if (Auth::check())
        {
            $usuarios = Usuario::all();
            return View::make('usuarios.show', array('usuarios' => $usuarios));
        }
        else
            return Redirect::to('login');      
    }


    public function create()
    {
        if (Auth::check())
            return View::make('usuarios.create');
         else
            return Redirect::to('login');
    }

    public function store()
    {
        if(Auth::check())
        {
            Usuario::create(Input::all());
            return Redirect::to('usuarios');
        }
        else
            return Redirect::to('login');
    }

 

    public function edit()
    {
        if (Auth::check())
        {
            $id=Auth::id();
            $usuario = Usuario::find($id);
            return View::make('usuarios.edit')->with('usuario', $usuario);
        }
        else
            return Redirect::to('login');      
    }

     public function update()
    {
        if (Auth::check())
        {
            $id=Auth::id();
            $usuario=Usuario::find($id);
            $usuario->nombre = Input::get('Nombre');
            $usuario->apellido = Input::get('Apellido');
            $usuario->correo = Input::get('Correo');
            $usuario->save();
            Session::flash('mensaje', 'Actualizado exitosamente!');
            return Redirect::to('usuarios/edit');
        }
        else
            return Redirect::to('login');      
    }

    public function verUsuario($id)
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