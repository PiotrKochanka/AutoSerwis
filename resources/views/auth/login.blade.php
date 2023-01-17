@extends('layouts.cms-layout')

@section('content')
<div class="login-container">
    <div class="login-container__login">
        <div class="login-container__login__content">
            <div class="login-container__login__content__card">
                <div class="login-container__login__content__card__header">{{ __('Logowanie do serwisu') }}</div>

                <div class="login-container__login__content__card__body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login-container__login__content__card__body__mail">
                            <label for="email" class="login-container__login__content__card__body__mail__label">{{ __('Adres email') }}</label>

                            <div class="login-container__login__content__card__body__mail__text">
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-container__login__content__card__body__password">
                            <label for="password" class="login-container__login__content__card__body__password__label">{{ __('Password') }}</label>

                            <div class="login-container__login__content__card__body__password__text">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-container__login__content__card__body__check">
                            <div class="login-container__login__content__card__body__check_content">
                                <div class="login-container__login__content__card__body__check__content__form">
                                    <input class="login-container__login__content__card__body__check__content__form__input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="login-container__login__content__card__body__check__content__form__label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="login-container__login__content__card__body__login">
                            <div class="login-container__login__content__card__body__login__content">
                                <button type="submit" class="login-container__login__content__card__body__login__content__button">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="login-container__login__content__card__body__login__content__link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
