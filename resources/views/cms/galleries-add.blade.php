@extends('home')

@section('cms-content')
<h3 class="cms-title">Nowa galeria</h3>
<form method="post" action="{{ route('cms.zapisz_galerie') }}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form__row">
        <div class="cms-title-element"><span>Tytuł</span></div>
        <input type="text" name="name" placeholder="Wpisz tytuł">
    </div>
  <button type="submit" class="form__button" style="margin-top:10px">Dodaj</button>
</form>


@endsection