@extends('layouts/start-layout')
@section('content')
    <!--Animacja-->
    <div class="start-content">
        <div class="animation-container">
            <div class="animation-container__mid">
                <div class="animation-container__mid__main">
                    <div class="animation-container__mid__main__slider">
                        @foreach($animations as $animation)
                            <div class="animation-container__mid__main__slider__paralax animation-container__mid__main__slider__slide" style="background-image: url({{ asset('gallery/animations/'.$animation->filenames) }});">
                            </div>
                        @endforeach
                    </div>
                    <div class="animation-container__mid__main__human">
                        <img src="{{ asset('graphic/mechanic.png') }}" alt="mechanic">
                    </div>
                    <div class="animation-container__mid__main__text">
                        <span>Samochody to</span>
                        <span>Nasza pasja!</span>
                    </div>
                </div>
            </div>
        </div>
        <!--Menu pod animacją-->
        <div class="mid-info width-1 block">
            <div class="mid-info__container">
                @foreach( $lists as $list )
                    @if( $list->position === "03. Informacje pod animacją")
                        @if( $list->menu == "informacja")
                        <div class="mid-info__container__section">
                            @if(is_null($list->filenames))
                            @else 
                                <div class="mid-info__container__section__icon"><img src="../gallery/icons/{{ $list->filenames }}" alt="{{ $list->title }}"></div>
                            @endif
                            <h2 class="mid-info__container__section__title">{{ $list->title }}</h2>
                            <div class="mid-info__container__section__text">
                                {!! $list->content !!}
                            </div>
                        </div>
                        @else
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <!--O Nas-->
        <div class="about-us width-100">
            @foreach( $lists as $list )
                @if( $list->position === "04. O Nas")
                    @if( $list->menu == "informacja")
                        <div class="about-us__container width-1 block">
                            <h2 class="about-us__container__h2"><div class="about-us__container__h2__back">{{ $list->title }}</div>{{ $list->title }}</h2>
                            <div class="about-us__container__text">
                                {!! $list->content !!}
                            </div>
                        </div>
                        <div class="about-us__movies width-1 block">
                            <div class="about-us__movies__movie">
                                @if(is_null($list->link))
                                @else
                                    <iframe width="560" height="315" src="{{ $list->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                @endif
                            </div>
                        </div>
                    @elseif( $list->menu == "link") 
                        <div class="about-us__link"><a class="about-us__link__button" href="{{ $list->link }}">{{ $list->title }}</a></div>
                    @else
                    @endif
                @endif
            @endforeach
            <div id="lottie-bg">
                {{-- <lottie-player id="firstLottie" src="https://assets6.lottiefiles.com/private_files/lf30_znoq3xkc.json" style="background-color: #f7f7f7; position: absolute; bottom: 0px;" preserveAspectRatio="xMinYMin slice"></lottie-player> --}}
                <lottie-player id="firstLottie" src="https://assets6.lottiefiles.com/packages/lf20_kecmw5x9.json" style="opacity: 0.04; background-color: #f7f7f7; position: absolute; right: 17vw; bottom: 23px; width: 65vw" preserveAspectRatio="xMinYMin slice"></lottie-player>
            </div>
            <script>
                LottieInteractivity.create({
                player:'#firstLottie',
                mode:"scroll",
                    actions: [
                    {
                        visibility:[0, 1.0],
                        type: "seek",
                        frames: [0, 60],
                    },
                    ]
                });
            </script>
        </div>
        <!--Usługi serwisowe-->
        <div class="service width-100">
            <h2 class="service__h2">Usługi serwisowe</h2>
            <div class="service__container width-1 block">
                <div class="service__container__col1 service__container__col">
                    <div class="service__container__col1__img">
                        <img src="../graphic/service-1.png" alt="Usługi serwisowe">
                    </div>
                </div>
                <div class="service__container__col2 service__container__col">
                    <ul class="service__container__col2__ul">
                        @foreach( $lists as $list )
                            @if( $list->position === "05. Usługi serwisowe")
                                @if( $list->menu == "informacja")
                                    <li class="service__container__col2__ul__li">
                                        <div class="service__container__col2__ul__li__img">
                                            <img src="../gallery/icons/{{ $list->filenames }}" alt="{{ $list->title }}">
                                        </div>
                                        <div class="service__container__col2__ul__li__text">
                                            <h2>{{ $list->title }}</h2>
                                            <span>
                                                {!! $list->content !!}
                                            </span>
                                        </div>
                                    </li>
                                @else
                                @endif
                            @endif 
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!--Usługi dodatkowe-->
        <div class="additional width-100">
            <h2 class="additional__h2">Usługi dodatkowe</h2>
            <div class="additional__container width-1 block">
                <div class="additional__container__col1 additional__container__col">
                    <ul class="additional__container__col1__ul">
                        @foreach( $lists as $list )
                            @if( $list->position === "06. Usługi dodatkowe")
                                @if( $list->menu == "informacja")
                                    <li class="additional__container__col1__ul__li">
                                        <div class="additional__container__col1__ul__li__img">
                                            <img src="../gallery/icons/{{ $list->filenames }}" alt="{{ $list->title }}">
                                        </div>
                                        <div class="additional__container__col1__ul__li__text">
                                            <h2>{{ $list->title }}</h2>
                                            <span>
                                                {!! $list->content !!}
                                            </span>
                                        </div>
                                    </li>
                                @else
                                @endif
                            @endif 
                        @endforeach
                    </ul>
                </div>
                <div class="additional__container__col2 additional__container__col">
                    <div class="additional__container__col2__img">
                        {{-- <img src="../graphic/silnik.jpg" alt="Usługi serwisowe"> --}}
                        <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_iydzpcng.json"  background="transparent"  speed="1.75"  style="width: 800px; height: 800px; margin-top: -280px; margin-left: -160px;"  loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
        <!-- Oferta-->
        <div class="offer width-100">
            <div class="offer__container width-1 block">
                <h2 class="offer__container__h2">Nasze realizacje</h2>
                <div class="offer__container__offers">
                    <article class="offer__container__offers__article offer__container__offers__startarticle">
                        <div class="offer__container__offers__article__icon offer__container__offers__startarticle__icon">
                            <div style="background-image: url({{ asset('graphic/default_offer.jpg') }});" class="offer__container__offers__article__icon__img offer__container__offers__startarticle__icon__img"></div>
                        </div>
                        <a href="#" class="offer__container__offers__article__title offer__container__offers__startarticle__title">Lorem ipsum dolor sit amet</a>
                    </article>
                    <article class="offer__container__offers__article offer__container__offers__startarticle">
                        <div class="offer__container__offers__article__icon offer__container__offers__startarticle__icon">
                            <div style="background-image: url({{ asset('graphic/default_offer.jpg') }});" class="offer__container__offers__article__icon__img offer__container__offers__startarticle__icon__img"></div>
                        </div>
                        <a href="#" class="offer__container__offers__article__title offer__container__offers__startarticle__title">Lorem ipsum dolor sit amet</a>
                    </article>
                    <article class="offer__container__offers__article offer__container__offers__startarticle">
                        <div class="offer__container__offers__article__icon offer__container__offers__startarticle__icon">
                            <div style="background-image: url({{ asset('graphic/default_offer.jpg') }});" class="offer__container__offers__article__icon__img offer__container__offers__startarticle__icon__img"></div>
                        </div>
                        <a href="#" class="offer__container__offers__article__title offer__container__offers__startarticle__title">Lorem ipsum dolor sit amet</a>
                    </article>
                </div>
            </div>
        </div>
        <!--Aktualności-->
        <div class="news width-100">
            <div class="news__container width-1 block">
                <h2 class="news__container__h2">Aktualności</h2>
                <div class="news__container__top">
                    @foreach($news->take(6) as $new)
                        @if($new->stop >= Carbon\Carbon::now())
                            <article class="news__container__top__article news__container__top__startarticle">
                                <div class="news__container__top__article__icon news__container__top__startarticle__icon">
                                    <div style="background-image: url({{ asset("gallery/news/".$new->filenames) }})" class="news__container__top__article__icon__img news__container__top__startarticle__icon__img"></div>
                                </div>
                                <span class="date">{{ $new->start }}</span>
                                <a href="/{{ $new->title }}-{{ $new->id }}" class="news__container__top__article__title news__container__top__startarticle__title">{{ $new->title }}</a>
                                <div class="news__container__top__article__short news__container__top__startarticle__short">{{ html_entity_decode(strip_tags(Str::limit($new->content, 200))) }}</div>
                            </article>
                        @endif
                    @endforeach
                </div>
                <div class="news__container__button">
                    <a href="/lista-aktualności" class="news__container__button__a">Zobacz więcej</a>
                </div>
            </div>
        </div>
        <!--Nasze realizacje-->
        {{-- <div class="realizations width-100">
            <div class="realizations__container width-1 block">
                <h2 class="realizations__container__h2">Nasze realizacje</h2>
                <div class="realizations__container__top">
                    <article class="realizations__container__top__article realizations__container__top__startarticle">
                        <div class="realizations__container__top__article__icon realizations__container__top__startarticle__icon">
                            <div style="background-image: url({{ asset('graphic/default_offer.jpg') }});" class="realizations__container__top__article__icon__img realizations__container__top__startarticle__icon__img"></div>
                        </div>
                        <a href="#" class="realizations__container__top__article__title realizations__container__top__startarticle__title">Lorem ipsum dolor sit amet</a>
                    </article>
                    <article class="realizations__container__top__article realizations__container__top__startarticle">
                        <div class="realizations__container__top__article__icon realizations__container__top__startarticle__icon">
                            <div style="background-image: url({{ asset('graphic/default_offer.jpg') }});" class="realizations__container__top__article__icon__img realizations__container__top__startarticle__icon__img"></div>
                        </div>
                        <a href="#" class="realizations__container__top__article__title realizations__container__top__startarticle__title">Lorem ipsum dolor sit amet</a>
                    </article>
                    <article class="realizations__container__top__article realizations__container__top__startarticle">
                        <div class="realizations__container__top__article__icon realizations__container__top__startarticle__icon">
                            <div style="background-image: url({{ asset('graphic/default_offer.jpg') }});" class="realizations__container__top__article__icon__img realizations__container__top__startarticle__icon__img"></div>
                        </div>
                        <a href="#" class="realizations__container__top__article__title realizations__container__top__startarticle__title">Lorem ipsum dolor sit amet</a>
                    </article>
                </div>
            </div>
        </div> --}}
    </div>
@endsection