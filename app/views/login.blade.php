<html>
<head>
{{ HTML::style('bootstrap/css/bootstrap.css')}}
{{ HTML::style('bootstrap/css/bootstrap-theme.css')}}
{{ HTML::style('bootstrap/css/bootstrap.min.js')}}
{{ HTML::style('bootstrap/css/signin.css')}}
<style>
.vertical-center {
  height: 1200px;  /* Fallback for browsers do NOT support vh unit */
  align-items: center;
  display: flex;
}
.vertical-uncenter {
  min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  min-height: 100vh; /* These two lines are counted as one :-)     align-items: center;   */
  display: flex;
}
</style>

</head> 
    <body>
        <div class="container vertical-center">
	        <div class="col-md-4 col-md-offset-4">
		        <center><h2 class="form-signin-heading">Datos de Ingreso</h2></center>
				{{ Form::open(array('url' => 'login','class' => 'form-signin')) }}
				    {{ Form::label('correo', 'Correo',array('class' => 'sr-only')); }}
				    {{ Form::text('correo','',array('class' => 'form-control input-lg','placeholder' => 'Direccion de Correo', 'required autofocus','required')); }}
				    {{ Form::label('password', 'Clave',array('class' => 'sr-only')); }}
				    {{ Form::password('password',array('class' => 'form-control input-lg','placeholder' => 'Password', 'required')); }}
				    {{ Form::submit('Ingresar',array('class' => 'btn btn-lg btn-primary btn-block')); }}

					{{ Form::close() }}
					<div class="vertical-uncenter">
					@if(is_null(Session::get('mensaje_login')))
						{{ Form::hidden('',Session::get('mensaje_login'),array('class' => 'alert alert-danger','disabled'));}}
					@else
						{{ Form::text('',Session::get('mensaje_login'),array('class' => 'alert alert-danger form-control input-lg ','role' => 'alert','disabled'));}}
					@endif
					</div>
			</div>
		</div>s
    </body>
</html>
