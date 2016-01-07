<html>
<head>
{{ HTML::style('bootstrap/css/bootstrap.css')}}
{{ HTML::style('bootstrap/css/bootstrap-theme.css')}}
{{ HTML::style('bootstrap/css/bootstrap.min.js')}}
<style>
  body {
    padding-top: 50px;
  }
</style>
    <nav class="navbar navbar-default navbar-fixed-top margin-top">
      <div class="container">
        <div class="navbar-header">
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li> {{ HTML::link('usuarios', 'Inicio');}} </li>
              <li> {{ HTML::link('usuarios', 'Directorio Empleados');}}</li> 
              <li> {{ HTML::link('contacto', 'Contacto');}}</li> 

              <li> {{ HTML::link('usuarios', 'Eventos');}}</li> 
              <li> {{ HTML::link('usuarios', 'Tareas');}}</li> 
              <li> {{ HTML::link('notices', 'Noticias');}}</li> 
              <li> {{ HTML::link('usuarios', 'Contenido');}}</li><li> {{ HTML::link('usuarios', 'Flujo de Trabajo');}}</li> 
              <li> {{ HTML::link('usuarios', 'Administrador');}}</li> 
              <li> {{ HTML::link('usuarios', 'Reportes');}}</li> 
    
          </ul>
          <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
                
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    Perfil <span class="glyphicon glyphicon-user"> 
                    <b class="caret"></b>
                  </a>
                <ul class="dropdown-menu">
                <li class="dropdown-header">Acciones</li>              
              </li>
                <li><a class="glyphicon glyphicon-edit" href="{{ URL::to('usuarios/' .Auth::id().'/edit') }}"> Editar</a></li>

                <li><a href="{{ URL::to('usuarios/' .Auth::id().'/edit') }}">Editar <span class="glyphicon glyphicon-edit"></span></a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ URL::to('logout') }}">Cerrar Sesion <span class="glyphicon glyphicon-log-out"></span></a></li>
              
              </ul>
            </li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </div> <!-- /container -->

</head> 
    <body>
        @section('sidebar')
            
        @show
        <div class="container">
            @yield('content')

        </div>

     <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('bootstrap/js/jquery.min.js')}}
    {{ HTML::script('bootstrap/js/bootstrap.min.js')}}
    </body>
</html>