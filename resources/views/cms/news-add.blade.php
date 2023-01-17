@extends('home')

@section('cms-content')
<?php 

    $month = date('m');
    $day = date('d');
    $year = date('Y');

    $today = $year . '-' . $month . '-' . $day;
    $newDate = date('Y-m-d', strtotime($today. ' + 1 months'))
?>
<h3 class="cms-title">Nowa aktualność</h3>
<form method="post" action="{{ route('cms.zapisz_aktualnosc') }}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form__row">
        <div class="cms-title-element"><span>Tytuł</span></div>
        <input type="text" name="title" placeholder="Wpisz tytuł">
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Start</span></div>
        <input type="date" name="start" value="{{ $today }}">
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Stop</span></div>
        <input type="date" name="stop" value="{{ $newDate }}">
    </div>
    <div class="form__row">
        <div class="cms-title-element"><span>Grafika</span></div>
        <input class="file" type="file" name="filenames[]">
    </div>
    <div class="form__row">
        <textarea id="myTextarea" class="form-control @error('myTextarea') is-invalid @enderror" name="content" required autocomplete="new-content">
            Strona jest przygotowywana...
        </textarea>
    </div>
  <button type="submit" class="form__button" style="margin-top:10px">Dodaj</button>
</form>


@endsection