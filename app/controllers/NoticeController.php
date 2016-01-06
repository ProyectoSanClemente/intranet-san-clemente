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
            Usuario::create(Input::all());
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
		//
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
            $id=Auth::id();
            $usuario = Usuario::find($id);
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
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
