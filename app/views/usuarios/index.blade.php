@extends('layouts.master')
@section('sidebar')
     @parent
@stop

@section('content')

    @if (Session::has('mensaje'))
        <div class="alert alert-info">{{ Session::get('mensaje') }}</div>
    @endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Rut</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Actions</td>
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

                <a class="btn btn-small btn-info" href="{{ URL::to('usuarios/' . $usuario->rut . '/edit') }}">Editar</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@stop