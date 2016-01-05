<?php 
class ContactoController extends BaseController {

    public function contacto()
    {
        if (Auth::check())
        {
        	$id=Auth::id();
        	$usuario = Usuario::find($id);
            return View::make('contacto');
        }
        else
            return Redirect::to('login');   
    }
}
?>