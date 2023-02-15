@extends('home')

@section('cms-content')
@if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
<h3 class="cms-title">Wyślij pliki</h3>
<form method="post" action="{{ route('cms.zapisz_plik') }}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form__row">
        <div class="cms-title-element"><span>Galeria</span></div>
        <select name="galleryId" required autocomplete="galleryId" autofocus>
            @foreach( $galleries as $gallery )
                <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Grafiki</span></div>
        <input class="file" type="file" name="filename[]" multiple>
    </div>
  <button type="submit" class="form__button" style="margin-top:10px">Dodaj</button>
</form>


@endsection