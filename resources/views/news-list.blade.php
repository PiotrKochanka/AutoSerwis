@extends('layouts/start-layout')
@section('content')

    <div class="subpage-container news width-100">
        <div class="news__container width-1 block">
            <h1>Aktualności</h1>
            <div class="news__container__top">
                @foreach($news as $new)
                    @if($new->stop >= Carbon\Carbon::now())
                        <article class="news__container__top__article">
                            <div class="news__container__top__article__icon">
                                <div style="background-image: url({{ asset("gallery/news/".$new->filenames) }})" class="news__container__top__article__icon__img"></div>
                            </div>
                            <span class="date">{{ $new->start }}</span>
                            <a href="/{{ $new->title }}-{{ $new->id }}" class="news__container__top__article__title">{{ $new->title }}</a>
                            <div class="news__container__top__article__short">{{ html_entity_decode(strip_tags(Str::limit($new->content, 200))) }}</div>
                        </article>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="subpage-container__button">
            <a href="/lista-aktualności-archiwum" class="subpage-container__button__a">Archiwum</a>
        </div>
    </div>

@endsection