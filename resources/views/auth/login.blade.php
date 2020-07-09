@extends('layouts.app')

@section('content')

<section>

    
    
    <div class="login ">
        <div class="login__grid">
            <img src="../src/login.jpg" class="login__img" alt="">
            <div class="login__modal">
                <p class="login__text">No te encuentras registrado todavia? Puedes hacerlo de forma sencilla y segura</p>
                <a href="{{ url('/register') }}" class="btn btn-outline-warning login__button"><span class="login__button--registry">Registrarme</span></a>
            </div>

    <div class=" login__form ">
        <h3 class="login__text--title">Iniciar Secion</h3>
            <form class=" " method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                    <div class="login__form__container">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} login__form__group mb-5">
                            <label for="email" class="login__label">Correo electronico</label>

                            <div class="pt-2">
                                <input id="email" type="email" class="form-control login__input" name="email" placeholder="Correo electronico" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} login__form__group mb-5">
                            <label for="password" class="login__label">Contrasena</label>

                            <div class="pt-2">
                                <input id="password" type="password" class="form-control login__input" placeholder="Contrasena" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group login__form__group">
                            <div class="">
                                <div class="checkbox ">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="login__container--sub">
                    <div class=" mt-5">
                        <button type="submit" class="login__button--log">
                            Iniciar Sesion
                        </button>

                        
                    </div>
                    <a class="btn btn-link mt-5 login__text--forgot" href="{{ route('password.request') }}">
                            Olvidaste tu contrasena?
                        </a>
                </div>
            </form>
        </div>
        </div>
    </div>

    
</section>

@endsection
