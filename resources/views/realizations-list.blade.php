@extends('layouts/start-layout')
@section('content')

    <div class="subpage-container news width-100">
        <div class="news__container width-1 block">
            <h1>Aktualności</h1>
            <div class="news__container__top">
                @foreach($realizations as $realization)
                        <article class="news__container__top__article">
                            <div class="news__container__top__article__icon">
                                <div style="background-image: url({{ asset("gallery/news/".$realization->filenames) }})" class="news__container__top__article__icon__img"></div>
                            </div>
                            <a href="/{{ $realization->title }}-{{ $realization->id }}" class="news__container__top__article__title">{{ $realization->title }}</a>
                        </article>
                @endforeach
            </div>
        </div>
        <div class="subpage-container__button">
            <a href="/lista-aktualności-archiwum" class="subpage-container__button__a">Archiwum</a>
        </div>
    </div>

@endsection