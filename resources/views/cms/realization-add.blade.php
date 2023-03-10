@extends('home')

@section('cms-content')
<h3 class="cms-title">Nowa realizacja</h3>
<form method="post" action="{{ route('cms.zapisz_realizacje') }}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form__row">
        <div class="cms-title-element"><span>Tytuł</span></div>
        <input type="text" name="title" placeholder="Wpisz tytuł">
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Grafika</span></div>
        <input class="file" type="file" name="filenames[]">
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Galeria</span></div>
        <select name="galleryId" required autocomplete="galleryId" autofocus>
            @foreach( $galleries as $gallery )
                <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form__row">
        <textarea id="myTextarea" class="form-control @error('myTextarea') is-invalid @enderror" name="content" required autocomplete="new-content">
        </textarea>
    </div>
  <button type="submit" class="form__button" style="margin-top:10px">Dodaj</button>
</form>


@endsection