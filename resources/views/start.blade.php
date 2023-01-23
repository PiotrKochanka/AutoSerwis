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
                <div class="mid-info__container__section">
                    <div class="mid-info__container__section__icon"><img src="../graphic/jakosc.png" alt="Jakość"></div>
                    <h2 class="mid-info__container__section__title">Gwarancja jakości</h2>
                    <div class="mid-info__container__section__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </div>
                <div class="mid-info__container__section">
                    <div class="mid-info__container__section__icon"><img src="../graphic/doradztwo.png" alt="Doradztwo"></div>
                    <h2 class="mid-info__container__section__title">Profesjonalne doradztwo</h2>
                    <div class="mid-info__container__section__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </div>
                <div class="mid-info__container__section">
                    <div class="mid-info__container__section__icon"><img src="../graphic/service.png" alt="Serwis"></div>
                    <h2 class="mid-info__container__section__title">Serwis</h2>
                    <div class="mid-info__container__section__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </div>
            </div>
        </div>
        <!--O Nas-->
        <div class="about-us width-100">
            <div class="about-us__container width-1 block">
                <h2 class="about-us__container__h2">O Nas</h2>
                <div class="about-us__container__text">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </div>
            </div>
            <div class="about-us__movies width-1 block">
                <div class="about-us__movies__movie">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/RVI23gUPfbU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="about-us__movies__movie">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/RVI23gUPfbU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
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
                        <li class="service__container__col2__ul__li">
                            <div class="service__container__col2__ul__li__img">
                                <img src="../graphic/serwis.png" alt="ikona">
                            </div>
                            <div class="service__container__col2__ul__li__text">
                                <h2>Serwis samochodowy</h2>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </span>
                            </div>
                        </li>
                        <li class="service__container__col2__ul__li">
                            <div class="service__container__col2__ul__li__img">
                                <img src="../graphic/pomoc.png" alt="ikona">
                            </div>
                            <div class="service__container__col2__ul__li__text">
                                <h2>Pomoc drogowa</h2>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </span>
                            </div>
                        </li>
                        <li class="service__container__col2__ul__li">
                            <div class="service__container__col2__ul__li__img">
                                <img src="../graphic/auto.png" alt="ikona">
                            </div>
                            <div class="service__container__col2__ul__li__text">
                                <h2>Auto zastępcze</h2>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </span>
                            </div>
                        </li>
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
                        <li class="additional__container__col1__ul__li">
                            <div class="additional__container__col1__ul__li__img">
                                <img src="../graphic/serwis.png" alt="ikona">
                            </div>
                            <div class="additional__container__col1__ul__li__text">
                                <h2>Auta premium</h2>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </span>
                            </div>
                        </li>
                        <li class="additional__container__col1__ul__li">
                            <div class="additional__container__col1__ul__li__img">
                                <img src="../graphic/pomoc.png" alt="ikona">
                            </div>
                            <div class="additional__container__col1__ul__li__text">
                                <h2>Metamorfoza aut</h2>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </span>
                            </div>
                        </li>
                        <li class="additional__container__col1__ul__li">
                            <div class="additional__container__col1__ul__li__img">
                                <img src="../graphic/auto.png" alt="ikona">
                            </div>
                            <div class="additional__container__col1__ul__li__text">
                                <h2>Wynajem aut</h2>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="additional__container__col2 additional__container__col">
                    <div class="additional__container__col2__img">
                        <img src="../graphic/silnik.jpg" alt="Usługi serwisowe">
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
                    @foreach($news->take(8) as $new)
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