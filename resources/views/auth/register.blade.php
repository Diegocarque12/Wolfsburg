@extends('layouts.app')

@section('content')

<section>


<div class="registry">
        
    <div class="registry__grid">
        <img src="{{asset('../src/register.jpg')}}" class="registry__img" alt="">
        <div class="registry__modal">
            <p class="registry__text">¿Ya tienes una cuenta? Si es así, ¿Qué esperas? Inicia sesión</p>
            <a href="{{ url('/login') }}" class="btn btn-outline-warning registry__button"><span class="registry__button--login">Iniciar sesion</span></a>
        </div>

        <div class="registry__form ">
            <h3 class="registry__text--title">Registrarse</h3>
            <form class="" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="login__form__container">

                    <div class="{{ $errors->has('name') ? ' has-error' : '' }} login__form__group mb-3">
                        <label for="name" class=" login__label">Nombre</label>

                        <div class="">
                            <input id="name" type="text" class="form-control login__input" placeholder="Nombre de usuario" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="{{ $errors->has('email') ? ' has-error' : '' }} login__form__group mb-3">
                        <label for="email" class=" login__label">Correo electrónico</label>

                        <div class="">
                            <input id="email" type="email" class="form-control login__input" placeholder="ejemplo@dominio.com" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="{{ $errors->has('password') ? ' has-error' : '' }} login__form__group mb-3">
                        <label for="password" class=" login__label">Contraseña</label>

                        <div class="">
                            <input id="password" type="password" class="form-control login__input" placeholder="Contraseña" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="login__form__group mb-3 ">
                        <label for="password-confirm" class=" login__label">Confirmar contraseña</label>

                        <div class="">
                            <input id="password-confirm" type="password" class="form-control login__input" placeholder="Confirmar contraseña" name="password_confirmation" required>
                        </div>
                    </div>

                </div>

                <div class="registry__container--sub ">
                    <div class=" mt-5">
                        <button type="submit" class="registry__button--reg">
                            Registrarme
                        </button>
                    </div>
                </div>

            </form>
        </div>
       
        </div> 
    </div>

</section>

@endsection
