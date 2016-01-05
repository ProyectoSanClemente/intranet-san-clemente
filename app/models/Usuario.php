<?php
use Illuminate\Auth\UserInterface;
class Usuario extends Eloquent implements UserInterface{ //Todos los modelos deben extender la clase Eloquent
    protected $table = 'usuarios';
    protected $fillable = array('nombre', 'apellido','correo','password');
    public $timestamps  = false;

    // este metodo se debe implementar por la interfaz
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }


	//este metodo se debe implementar por la interfaz
    // y sirve para obtener la clave al momento de validar el inicio de sesión
    public function getAuthPassword()
    {
        return $this->password;
    }




    public function getRememberToken()
 	{
   		return null; // not supported
 	}

 	public function setRememberToken($value)
 	{
   	// not supported
 	}

 	public function getRememberTokenName()
 	{
   		return null; // not supported
 	}

 /**
  * Overrides the method to ignore the remember token.
  */

}
?>