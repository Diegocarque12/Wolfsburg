@extends('layouts.app')

@section('content')

<section>

<h2 class="text-center mt-5">Accede a tu cuenta</h2>
<div class="registry mb-4">
        
    <div class="mt-5">
        
        <img src="../src/register.jpg" class="registry__img" alt="">
        <div class="registry__modal">
            <p class="registry__text">Ya tienes una cuenta? Si es asi que esperas, inicia sesion</p>
            <a href="{{ url('/login') }}" class="btn btn-outline-warning registry__button"><span class="registry__button--login">Iniciar sesion</span></a>
        </div>
        
    </div>

        <div class="registry__form ">
            <h3 class="text-center registry__text--title">Registrarse</h3>
            <form class="form-horizontal registry__form__container" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="{{ $errors->has('name') ? ' has-error' : '' }} login__form__group mb-3">
                    <label for="name" class=" control-label">Name</label>

                    <div class="">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="{{ $errors->has('email') ? ' has-error' : '' }} login__form__group mb-3">
                    <label for="email" class=" control-label">E-Mail Address</label>

                    <div class="">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="{{ $errors->has('password') ? ' has-error' : '' }} login__form__group mb-3">
                    <label for="password" class=" control-label">Password</label>

                    <div class="">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="login__form__group mb-3 ">
                    <label for="password-confirm" class=" control-label">Confirm Password</label>

                    <div class="">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group ">
                    <div class="text-center mt-5">
                        <button type="submit" class="registry__button--reg">
                            Registrarme
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>

</section>

@endsection
