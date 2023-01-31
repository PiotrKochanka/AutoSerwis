@extends('home')

@section('cms-content')
<h3 class="cms-title">Nowy element</h3>
<form method="post" action="{{ route('cms.zapisz_element') }}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form__row">
        <div class="cms-title-element"><span>Pozycja</span></div>
        <select name="position" required autocomplete="position" autofocus>
            @foreach( $structures as $structure )
                <option value="{{ $structure->title }}">{{ $structure->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Menu</span></div>
        <select name="menu" required autocomplete="menu" autofocus>
            <option value="informacja">Informacja</option>
            <option value="link">Link</option>
            <option value="menu">Menu</option>
            <option value="aktualnosci">Aktualności</option>
        </select>
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Tytuł</span></div>
        <input type="text" name="title" placeholder="Wpisz tytuł">
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Grafika</span></div>
        <input class="file" type="file" name="filenames[]">
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Link</span></div>
        <input type="text" name="link" placeholder="Wpisz link">
    </div>
  <button type="submit" class="form__button" style="margin-top:10px">Dodaj</button>
</form>


@endsection