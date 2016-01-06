@extends('layouts.master')


@section('content')
<h1 class="page-header">Editar {{ $usuario->nombre.' '.$usuario->apellido }}</h1>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}


{{ Form::model($usuario, array('route' => array('usuarios.update', $usuario->rut), 'method' => 'PUT','class' => 'form-horizontal','role'=>'form','files'=> true)) }}

    <div class="row">
        <!-- left column -->

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="text-center">
        @if (file_exists('images/avatar/'.$usuario->rut.'.jpg'))
            {{HTML::image('images/avatar/'.$usuario->rut.'.jpg',null,array('class'=>'avatar img-circle img-thumbnail'))}}
        @else
            {{HTML::image('images/avatar/default.png',null,array('class'=>'avatar img-circle img-thumbnail'))}}
        @endif
            <h6>Subir otra imagen</h6>
              {{ Form::file('avatar',array('class'=>"text-center center-block well well-sm",'accept'=>"image/x-png, image/gif, image/jpeg" )); }}
          </div>
        </div>


        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
          <h3>Información Personal</h3>
            @if (Session::has('mensaje'))
              <div class="alert alert-info">{{ Session::get('mensaje') }}</div>
            @endif

            <div class="form-group">
                {{ Form::label('nombre', 'Nombre',array('class' => 'col-lg-3 control-label')); }}
                <div class="col-lg-8">
                    {{ Form::text('nombre',$usuario->nombre,array('class' => 'form-control col-lg-8','required autofocus')); }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('rut', 'Rut',array('class' => 'col-lg-3 control-label')); }}
                <div class="col-lg-8">
                    {{ Form::text('rut',$usuario->rut,array('class' => 'form-control col-lg-8','required autofocus')); }}
                </div>
            </div>


            <div class="form-group">
                {{ Form::label('apellido', 'Apellido',array('class' => 'col-lg-3 control-label')); }}
                <div class="col-lg-8">
                    {{ Form::text('apellido',$usuario->apellido,array('class' => 'form-control col-lg-8')); }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('correo', 'Correo',array('class' => 'col-lg-3 control-label')); }}
                <div class="col-lg-8">
                    {{ Form::text('correo',$usuario->correo,array('class' => 'form-control col-lg-8')); }}
                </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                {{ Form::submit('Guardar Cambios',array('class' => 'btn btn-primary btn-primary')); }}
                {{ Form::reset('Reiniciar',array('class'=>"btn btn-default")) }}
              </div>
            </div>
           
        </div>
    </div>
{{ Form::close() }}


@stop