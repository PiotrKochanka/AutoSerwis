@extends('home')

@section('cms-content')
<h3 class="cms-title">Nowy element animacji</h3>
<form method="post" action="{{ route('cms.zapisz') }}" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form__row">
    <div class="cms-title-element"><span>Tytuł</span></div>
    <input type="text" name="title" placeholder="Wpisz tytuł">
  </div>
  <div class="form__row">
    <div class="cms-title-element"><span>Grafika</span></div>
    <input type="file" name="filenames[]" class="file">
  </div>
  <button type="submit" class="form__button" style="margin-top:10px">Dodaj</button>
</form>

@endsection