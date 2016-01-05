<html>
<head>
{{ HTML::style('bootstrap/css/bootstrap.css')}}
{{ HTML::style('bootstrap/css/bootstrap-theme.css')}}
{{ HTML::style('bootstrap/css/bootstrap.min.js')}}


<nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
      <li><a href="usuarios">Inicio</a></li>
      <li><a href="perfil">Mi página</a></li> 
      <li><a href="usuarios">Directorio Empleados</a></li>
      <li><a href="#">Contacto</a></li>
      <li><a href="#">Eventos</a></li>
      <li><a href="#">Tareas</a></li>
      <li><a href="#">Noticias</a></li>
      <li><a href="#">Fotos</a></li>
      <li><a href="#">Contenido de Intranet</a></li>
      <li><a href="#">Flujo de Trabajo</a></li>
      <li><a href="#">Administrador</a></li>
      <li><a href="#">Reportes</a></li>
      <li>@if(Auth::check())
    	{{ HTML::link('logout', 'Cerrar Sesion',array('class'=>'btn-lg btn-danger')); }}
	@endif
	</li>
    </ul>
</nav>

</head> 
    <body>

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>