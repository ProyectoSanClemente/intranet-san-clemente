@extends('layouts.master')

@section('sidebar')
     @parent
@stop

@section('content')

    @if (Session::has('mensaje'))
        <div class="alert alert-info">{{ Session::get('mensaje') }}</div>
    @endif
        {{ HTML::link('notices/create', 'Crear Noticia',array('class' => 'btn btn-primary' ))}}
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td><center>Titulo</center></td>
            <td><center>Contenido</center></td>
            <td><center>Imagen</center></td>
            <td><center>Fecha</center></td>
            <td><center>Acciones</center></td>

        </tr>
    </thead>
    <tbody>
   
    @foreach($notices as $notice)
        <tr><center>
            <td>{{ $notice->titulo }}</td>
            <td>{{ $notice->contenido }}</td>
            <td>{{ $notice->imagen }}</td>
            <td>{{ $notice->created_at}}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td> 
                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('notices/' . $notice->id) }}">Mostrar Noticia</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
               <a class="btn btn-small btn-info" href="{{ URL::to('notices/' . $notice->id . '/edit') }}">Editar Noticia</a>
                           {{ Form::open(array('url' => 'notices/' . $notice->id,'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                     {{ Form::submit('Borrar Noticia' , array('class' => 'btn btn-small btn-warning')) }}
                   
                {{ Form::close() }}

            </td>
        </center></tr>
    @endforeach
    </tbody>
</table>

@stop