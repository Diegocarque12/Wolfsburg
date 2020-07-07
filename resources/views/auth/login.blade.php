@extends('layouts.app')
@section('imports')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@endsection
@section('content')

<section>

    <h2 class="text-center mt-5">Accede a tu cuenta</h2>
    
    <div class="login">
    
        <div>
        
            <img src="../src/login.jpg" class="login__img" alt="">
            <div class="login__modal">
                <p class="login__text">No te encuentras registrado todavia? Puedes hacerlo de forma sencilla y segura</p>
                <button class="btn btn-outline-warning login__button"><span class="login__button--registry">Registrarme</span></button>
            </div>
            
        </div>

        <div class="login__form">
            <h3 class="text-center login__text--title">Iniciar Secion</h3>
            <form class="form-horizontal login__form__container" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-5">
                    <label for="email" class="form">Correo electronico</label>

                    <div class="pt-2">
                        <input id="email" type="email" class="form-control" name="email" placeholder="Correo electronico" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mb-5">
                    <label for="password" class="">Contrasena</label>

                    <div class="pt-2">
                        <input id="password" type="password" class="form-control" placeholder="Contrasena" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group ">
                    <div class="">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="text-center mt-5">
                        <button type="submit" class="login__button--log">
                            Iniciar Sesion
                        </button>

                        
                    </div>
                    <a class="btn btn-link mt-5" href="{{ route('password.request') }}">
                            Olvidaste tu contrasena?
                        </a>
                </div>
            </form>
        </div>
    </div>
    

    <div class="registry">
        
        <div>
        
            <img src="../src/register.jpg" class="registry__img" alt="">
            <div class="registry__modal">
                <p class="registry__text">No te encuentras registrado todavia? Puedes hacerlo de forma sencilla y segura</p>
                <button class="btn btn-outline-warning registry__button"><span class="registry__button--login">Registrarme</span></button>
            </div>
            
        </div>

        <div class="registry__form">
            <h3 class="text-center login__text--title">Registrarse</h3>
            <form class="form-horizontal registry__form__container" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-5">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="pt-2">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-5">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="pt-2">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mb-5">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="pt-2">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group mb-5">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="pt-2">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>

@endsection
