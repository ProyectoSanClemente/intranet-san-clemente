<?php 
class UsuariosController extends BaseController {

    public function show($rut)
    {
        if (Auth::check())
        {
            $usuario = Usuario::find($rut);
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
        if (Auth::check())

      
            return View::make('usuarios.create');
        else
            return Redirect::to('login');    
    }

    public function store()
    {
    
            $rules = array(
                'rut'       => 'required',
                'nombre'    => 'required|alpha',
                'apellido'  => 'required|alpha',
                'correo'    => 'required|email',         
            );
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails())
            {
                return Redirect::to('usuarios/create')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            }
        else{
                $usuario           = new Usuario;
                $usuario->rut     = Input::get('rut');
                $usuario->nombre   = Input::get('nombre');
                $usuario->apellido = Input::get('apellido');
                $usuario->correo   = Input::get('correo');
                $usuario->password = Hash::make($usuario->rut);
                $usuario->save();
                Session::flash('mensaje', 'Usuario creado exitosamente!');
                return Redirect::to('usuarios');
            }
        }

    public function edit($rut)
    {

        if (Auth::check())
        {
            $usuario = Usuario::find($rut);
            return View::make('usuarios.edit')->with('usuario', $usuario);
        }
        else
            return Redirect::to('login');      
    }

     public function update($rut)
    {
        if (Auth::check())
        {            
            $rules = array(
                'nombre'    => 'required|alpha',
                'apellido'  => 'required|alpha',
                'correo'    => 'required|email',          
            );
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails())
            {
                return Redirect::to('usuarios/'.$rut.'/edit')
                    ->withErrors($validator);       
            }
        else{
            $usuario=Usuario::find($rut);
            $usuario->nombre = Input::get('nombre');
            $usuario->apellido = Input::get('apellido');
            $usuario->correo = Input::get('correo');
            $usuario->save();
            
            if (Input::hasFile('avatar')){                     
                Image::make(Input::file('avatar'))->resize(300, 200)->save('images/avatar/'.$usuario->rut.'.jpg');
            }

            Session::flash('mensaje', 'Actualizado exitosamente usuario Rut:'.' '.$usuario->rut.'!');
            return Redirect::to('usuarios');

        }
    }
    else
        return Redirect::to('login');      
    }

    public function destroy($rut)
    {
            // delete
        $usuario = Usuario::find($rut);
        $usuario->delete();

        // redirect
        Session::flash('mensaje', 'Usuario borrado con Exito!');
        return Redirect::to('usuarios');
    }


}
?>