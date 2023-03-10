@extends('layouts/start-layout')
@section('content')
    <?php
        $url = Request::url();
        $id = substr($url, strrpos($url, '-') + 1);
    ?>
    <div class="subpage-container width-100">
        <div class="subpage-container__content width-1 block">
            @foreach($realizations as $realization)
                @if($id == $realization->id)
                    <h1 class="subpage-container__content__h1">{{ $realization->title }}</h1>
                    <div class="subpage-container__content__all">
                        {!! $realization->content !!}
                    </div>
                    <div class="subpage-container__content__gallery">
                        @foreach($files as $file)
                            @if($realization->galleryId == $file->galleryId)
                                @if($file->filename > 0)
                                    <div class="subpage-container__content__gallery__photos">
                                        <div style="background-image: url({{ asset("gallery/photogallery/".$file->filename) }})" class="subpage-container__content__gallery__photos__img"></div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
        <div class="subpage-container__button">
            <a href="/lista-realizacji" class="subpage-container__button__a">Powrót do listy</a>
        </div>
    </div>

@endsection