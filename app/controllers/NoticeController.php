<?php

class NoticeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if (Auth::check())
        {
            $notices = Notice::all();
            return View::make('notices.index')->with('notices',$notices);
        }
        else
            return Redirect::to('login');      
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if (Auth::check())
            return View::make('notices.create');
         else
            return Redirect::to('login');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        if(Auth::check())
        {
            Notice::create(Input::all());
            return Redirect::to('notices');
        }
        else
            return Redirect::to('login');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
    {
        if (Auth::check())
        {
            $notice = Notice::find($id);
            return View::make('notices.show')->with('notice',$notice);
        }
        else
            return Redirect::to('login');      
    }



	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        if (Auth::check())
        {
            $notice = Notice::find($id);
            return View::make('notices.edit')->with('notice', $notice);
        }
        else
            return Redirect::to('login');  
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        if (Auth::check())
        {
            $rules = array(
                'titulo'       => 'required',
                'contenido'    => 'required',
                'imagen'  => 'required',            
            );
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails())
            {
                return Redirect::to('notices/'.$id.'/edit')
                    ->withErrors($validator);       
            }
        else{
                $notice=Notice::find($id);
                $notice->titulo = Input::get('titulo');
                $notice->contenido = Input::get('contenido');
                $notice->imagen = Input::get('imagen');
                $notice->save();
                Session::flash('mensaje', 'Actualizado exitosamente');
                return Redirect::to('notices');
            }
        }
        else
            return Redirect::to('login');      
    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	        // delete
        $notice = Notice::find($id);
        $notice->delete();

        // redirect
        Session::flash('message', 'Noticia Borrada con Exito!');
        return Redirect::to('notices');
	}


}
