@extends('home')

@section('cms-content')
<?php 

    $month = date('m');
    $day = date('d');
    $year = date('Y');

    $today = $year . '-' . $month . '-' . $day;
    $newDate = date('Y-m-d', strtotime($today. ' + 1 months'))
?>
@if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
<h3 class="cms-title">Edytuj aktualność</h3>
<form method="post" action="{{ url('home/save_news/'.$news->id) }}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form__row">
        <div class="cms-title-element"><span>Tytuł</span></div>
        <input type="text" name="title" placeholder="Wpisz tytuł" value="{{$news['title']}}">
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Start</span></div>
        <input type="date" name="start" value="{{$news['start']}}">
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Stop</span></div>
        <input type="date" name="stop" value="{{$news['stop']}}">
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Grafika</span></div>
        <input type="file" name="filenames[]" class="file">
    </div>
    @if($news['filenames'] == '')
    @else
        <div class="cms-img-container" style="display: flex; justify-content: center; width: 100%; max-width: 992px;"><img src="{{ asset('gallery/news/'.$news->filenames) }}" width="400px" style="margin-bottom: 8px" alt="Image"></div>
    @endif
    <div class="form__row">
        <textarea id="myTextarea" class="form-control @error('myTextarea') is-invalid @enderror" name="content" required autocomplete="new-content">  
            {{$news['content']}}
        </textarea>
    </div>
  <button type="submit" class="form__button" style="margin-top:10px">Edytuj</button>
</form>


@endsection