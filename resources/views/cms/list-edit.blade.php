@extends('home')

@section('cms-content')
<h3 class="cms-title">Edytuj element</h3>
<form method="post" action="{{ url('home/zaktualizuj_element/'.$lists->id) }}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form__row">
        <div class="cms-title-element"><span>Pozycja</span></div>
        <select name="position" required autocomplete="position" autofocus>
            @foreach( $structures as $structure )
                <option value="{{ $structure->title }}" @if($lists['position'] == $structure->title) selected="selected"@endif>{{ $structure->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Menu</span></div>
        <select name="menu" required autocomplete="menu" autofocus value="{{$lists['menu']}}">
            <option value="informacja" @if($lists['menu'] == 'informacja')selected="selected"@endif>Informacja</option>
            <option value="link" @if($lists['menu'] == 'link')selected="selected"@endif>Link</option>
            <option value="menu" @if($lists['menu'] == 'menu')selected="selected"@endif>Menu</option>
            <option value="aktualnosci" @if($lists['menu'] == 'aktualnosci')selected="selected"@endif>Aktualności</option>
        </select>
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Tytuł</span></div>
        <input type="text" name="title" placeholder="Wpisz tytuł" value="{{$lists['title']}}">
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Grafika</span></div>
        <input class="file" type="file" name="filenames[]">
    </div>
    @if($lists['filenames'] == '')
    @else
        <div class="cms-img-container" style="display: flex; justify-content: center; width: 100%; max-width: 992px;"><img src="{{ asset('gallery/icons/'.$lists->filenames) }}" style="margin-bottom: 8px" alt="Image"></div>
    @endif
    <div class="form__row">
        <div class="cms-title-element"><span>Link</span></div>
        <input type="text" name="link" placeholder="Wpisz link" value="{{$lists['link']}}">
    </div>
  <button type="submit" class="form__button" style="margin-top:10px">Edytuj</button>
</form>


@endsection