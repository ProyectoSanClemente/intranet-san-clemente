<html>
<head>
{{ HTML::style('bootstrap/css/bootstrap.css')}}
{{ HTML::style('bootstrap/css/bootstrap-theme.css')}}
{{ HTML::style('bootstrap/css/bootstrap.min.js')}}

@if(Auth::check())
    {{ HTML::link('logout', 'Cerrar Sesion',array('class'=>'btn-lg btn-danger')); }}
@endif
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Page 2</a></li> 
      <li><a href="#">Page 3</a></li>
      <li><a href="#">Page 4</a></li> 
    </ul>
  </div>
</nav>


</head> 
    <body>

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>