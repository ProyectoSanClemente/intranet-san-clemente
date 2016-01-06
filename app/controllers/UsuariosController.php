<?php 
class UsuariosController extends BaseController {

    /**
     * Mustra la lista con todos los usuarios
     */
    public function show($id)
    {
        if (Auth::check())
        {
            $usuario = Usuario::find($id);
            return View::make('usuarios.show')->with('usuario',$usuario);
        }
        else
            return Redirect::to('login');      
    }

    public function index()
    {
        if (Auth::check())
        {
            $usuarios = Usuario::all();
            return View::make('usuarios.index')->with('usuarios',$usuarios);
        }
        else
            return Redirect::to('login');    
    }

    public function create()
    {


        if (Auth::check()) //Si esta logeado
            return View::make('usuarios.create');
        else
            return Redirect::to('login');
    }

    public function store()
    {
        if(Auth::check())
        {

         $rules = array(
            'rut'   => 'required',
            'nombre'       => 'required',
            'apellido'       => 'required',
            'correo'      => 'required|email',            
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            return Redirect::to('usuarios/create')->withErrors($validator);        
        }
        else{
                Usuario::create(Input::all());
                Session::flash('mensaje', 'Successfully created nerd!');
                return Redirect::to('usuarios');
            }
        }
        else
            return Redirect::to('login');
    }

    public function edit($id)
    {
        if (Auth::check())
        {
            $usuario = Usuario::find($id);
            return View::make('usuarios.edit')->with('usuario', $usuario);
        }
        else
            return Redirect::to('login');      
    }

     public function update($id)
    {
        if (Auth::check())
        {
            $usuario=Usuario::find($id);
            $usuario->rut = Input::get('rut');
            $usuario->nombre = Input::get('nombre');
            $usuario->apellido = Input::get('apellido');
            $usuario->correo = Input::get('correo');
            $usuario->save();
            Session::flash('mensaje', 'Actualizado exitosamente usuario ID:'.' '.$usuario->id.'!');
            return Redirect::to('usuarios');
        }
        else
            return Redirect::to('login');      
    }

}
?>