<h2>Ingresar</h2>

@if (Session::has('mensaje_login'))
<span>{{ Session::get('mensaje_login') }}</span>
@endif

{{ Form::open(array('url' => 'login')) }}

    {{ Form::label('correo', 'Correo'); }}
    {{ Form::text('correo'); }}
    {{ Form::label('password', 'Clave'); }}
    {{ Form::password('password'); }}
    {{ Form::submit('Ingresar'); }}

{{ Form::close() }}