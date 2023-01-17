@extends('home')

@section('cms-content')
<h3 class="cms-title">Nowy element animacji</h3>
<form method="post" action="{{ url('home/zaktualizuj/'.$animations->id) }}" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form__row">
    <div class="cms-title-element"><span>Tytuł</span></div>
    <input type="text" name="title" class="form-control" placeholder="Wpisz tytuł" value="{{$animations['title']}}">
  </div>
  <div class="form__row">
    <div class="cms-title-element"><span>Grafika</span></div>
    <input type="file" name="filenames[]" class="file">
  </div>
  <div class="cms-img-container" style="display: flex; justify-content: center; width: 100%; max-width: 992px;"><img src="{{ asset('gallery/animations/'.$animations->filenames) }}" width="400px" style="margin-bottom: 8px" alt="Image"></div>
  <button type="submit" class="form__button" style="margin-top:10px">Edytuj</button>
</form>

@endsection