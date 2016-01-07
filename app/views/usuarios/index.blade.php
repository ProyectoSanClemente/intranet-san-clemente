@extends('layouts.master')
@section('sidebar')
     @parent
@stop

@section('content')
<h1 class="page-header">Directorio de Usuarios</h1>

    @if (Session::has('mensaje'))
        <div class="alert alert-info">{{ Session::get('mensaje') }}</div>
    @endif
{{ HTML::link('usuarios/create', 'Crear Usuario',array('class' => 'btn btn-primary' ))}}
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Rut</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Ver</td>
            <td>Editar</td>
            <td>Borrar</td>
        </tr>
    </thead>
    <tbody>
   
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->rut }}
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->apellido }}</td>
            <td>{{ $usuario->correo }}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('usuarios/' . $usuario->rut) }}">Mostrar Usuario</a>
            </td>
                <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('usuarios/' . $usuario->rut . '/edit') }}">Editar</a>
            </td>
            <td>

                {{ Form::open(array('url' => 'usuarios/' . $usuario->rut,'class' => 'pull-ceter')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar Usuario' , array('class' => 'btn btn-small btn-warning')) }}
                {{ Form::close() }}
            </td>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@stop