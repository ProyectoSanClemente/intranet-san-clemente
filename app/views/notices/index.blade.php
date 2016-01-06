@extends('layouts.master')

@section('sidebar')
     @parent
     Noticias
@stop

@section('content')

    @if (Session::has('mensaje'))
        <div class="alert alert-info">{{ Session::get('mensaje') }}</div>
    @endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Fecha</td>
            <td>Titulo</td>
            <td>Contenido</td>
            <td>Imagen</td>
        </tr>
    </thead>
    <tbody>
   
    @foreach($notices as $notice)
        <tr>
            <td>{{ $notice->titulo }}
            <td>{{ $notice->contenido }}</td>
            <td>{{ $notice->imagen }}</td>
            <td>{{ $notice->fecha }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('notices/' . $notice->id) }}">Mostrar Noticia</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('notices/' . $notice->id . '/edit') }}">Editar Noticia</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@stop