@extends('layouts/start-layout')
@section('content')
    <?php
        $url = Request::url();
        $id = substr($url, strrpos($url, '-') + 1);
    ?>
    <div class="subpage-container width-100">
        <div class="subpage-container__content width-1 block">
            @foreach($news as $new)
                @if($id == $new->id)
                    <h1 class="subpage-container__content__h1">{{ $new->title }}</h1>
                    <span class="date">{{ $new->start }}</span>
                    <div class="subpage-container__content__all">
                        {!! $new->content !!}
                    </div>
                @endif
            @endforeach
        </div>
        <div class="subpage-container__button">
            <a href="/lista-aktualności" class="subpage-container__button__a">Powrót do listy</a>
        </div>
    </div>

@endsection