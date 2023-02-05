@extends('home')

@section('cms-content')
<h3 class="cms-title">Nowa aktualność</h3>
<form method="post" action="{{ route('cms.zapisz_uzytkownika') }}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form__row">
        <div class="cms-title-element"><span>Imie</span></div>
        <input type="text" name="name" placeholder="Wpisz tytuł">
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>e-mail</span></div>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>telefon</span></div>
        <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="email">

        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>hasło</span></div>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>potwierdź hasło</span></div>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
  <button type="submit" class="form__button" style="margin-top:10px">Dodaj</button>
</form>


@endsection