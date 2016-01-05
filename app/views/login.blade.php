<html>
<head>
{{ HTML::style('bootstrap/css/bootstrap.css')}}
{{ HTML::style('bootstrap/css/bootstrap-theme.css')}}
{{ HTML::style('bootstrap/css/bootstrap.min.js')}}


</head> 
    <body>

        <div class="container">
            		<h2>Ingresar</h2>

		@if (Session::has('mensaje_login'))
		<span>{{ Session::get('mensaje_login') }}</span>
		@endif

		{{ Form::open(array('url' => 'login','class' => 'form-signin')) }}
		    {{ Form::label('correo', 'Correo',array('class' => 'sr-only')); }}
		    {{ Form::text('correo','',array('class' => 'btn btn-primary btn-lg','placeholder' => 'Direccion de Correo', 'required autofocus')); }}
		    {{ Form::label('password', 'Clave',array('class' => 'sr-only')); }}
		    {{ Form::password('password',array('placeholder' => 'Password', 'required')); }}
		    {{ Form::submit('Ingresar',array('class' => 'btn btn-lg btn-primary btn-block')); }}

		{{ Form::close() }}
        </div>

    </body>
</html>