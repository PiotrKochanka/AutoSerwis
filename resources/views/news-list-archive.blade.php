@extends('layouts/start-layout')
@section('content')

    <div class="subpage-container news archive width-100">
        <div class="news__container archive__container width-1 block">
            <h1>Archiwum</h1>
            <div class="news__container__top archive__container__top">
                @foreach($news as $new)
                    @if($new->stop < Carbon\Carbon::now())
                        <article class="news__container__top__article archive__container__top__article">
                            <div class="news__container__top__article__icon archive__container__top__article__icon">
                                <div style="background-image: url({{ asset("gallery/news/".$new->filenames) }})" class="news__container__top__article__icon__img archive__container__top__article__icon__img"></div>
                            </div>
                            <div class="news__container__top__article__text archive__container__top__article__text">
                                <span class="date">{{ $new->start }}</span>
                                <a href="/{{ $new->title }}-{{ $new->id }}" class="news__container__top__article__text__title archive__container__top__article__text__title">{{ $new->title }}</a>
                                <div class="news__container__top__article__text__short archive__container__top__article__text__short">{{ html_entity_decode(strip_tags(Str::limit($new->content, 200))) }}</div>
                            </div>
                        </article>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="subpage-container__button">
            <a href="/lista-aktualności" class="subpage-container__button__a">Powrót do listy</a>
        </div>
    </div>

@endsection