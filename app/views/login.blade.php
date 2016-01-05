<h2>Ingresar</h2>

@if (Session::has('mensaje_login'))
<span>{{ Session::get('mensaje_login') }}</span>
@endif

{{ Form::open(array('url' => 'login','class' => 'btn btn-primary btn-lg" href="#" role="button')) }}

    {{ Form::label('correo', 'Correo'); }}
    {{ Form::text('correo','',array('class' => 'btn btn-primary btn-lg" href="#" role="button')); }}
    {{ Form::label('password', 'Clave'); }}
    {{ Form::password('password'); }}
    {{ Form::submit('Ingresar'); }}

{{ Form::close() }}



    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->