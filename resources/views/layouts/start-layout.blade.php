<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- Script -->
    <script type="text/javascript" src="{{ URL::asset('js/animation.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/header.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/paralax.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/form.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Css -->
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/animation.css">
    <link rel="stylesheet" href="/css/start.css">
    <link rel="stylesheet" href="/css/subpage.css">
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    @foreach($cores as $core)
        <link href="{{ $core->font }}" rel="stylesheet">
    @endforeach

    <title>Auto Serwis</title>
</head>
<body>
    <div class="container">
        <header class="width-100">
            <div class="header-data width-100">
                <div class="header-data__container width-1">
                    <div class="header-data__container__datas">
                        <span>Salon Posnań: +48 513 223 139</span>
                        <span>autoserwis@serwiss.com</span>
                    </div>
                    <div class="header-data__container__social">
                        <a href="#" title="link"><img src="{{ asset('graphic/ikona-fb.png') }}" alt="facebook"></a>
                        <a href="#" title="link"><img src="{{ asset('graphic/ikona-yt.png') }}" alt="youtube"></a>
                        <a href="#" title="link"><img src="{{ asset('graphic/ikona-instagram.png') }}" alt="instagram"></a>
                    </div>
                </div>
            </div>
            <div class="header-main width-100">
                <div class="header-main__container width-1">
                    <div class="header-main__container__logo">
                        <a href="/" title="logo"><img src="{{ asset('graphic/logo.webp') }}" alt="logo"></a>
                    </div>
                    <div class="header-main__container__menu">
                        <ul class="header-main__container__menu__menu-top-1-level">
                            {{-- <li><a href="#" title="link">O Firmie</a></li>
                            <li class="{{ (request()->is('layouts/start-layout')) ? 'active' : '' }}"><a href="/lista-aktualności" title="link">Aktualności</a></li>
                            <li><a href="#" title="link">Realizacje</a></li>
                            <li><a href="#" title="link">Kontakt</a></li> --}}
                            @foreach(\App\Models\Lists::all() as $list)
                                @if($list->menu == "informacja")
                                    <li class="header-main__container__menu__menu-top-1-level__info"><a href="/{{ $list->title }}-{{ $list->id }}" alt="{{ $list->title }}">{{ $list->title }}</a></li>
                                @elseif($list->menu == "link")
                                    <li class="header-main__container__menu__menu-top-1-level__link"><a href="{{ $list->link }}" alt="{{ $list->title }}" target="_blank">{{ $list->title }}</a></li>
                                @elseif($list->menu == "aktualnosci")
                                    <li class="header-main__container__menu__menu-top-1-level__link"><a href="/lista-aktualności" alt="{{ $list->title }}">{{ $list->title }}</a></li>
                                @else 
                                    <li class="header-main__container__menu__menu-top-1-level__link__menu">
                                        <button>{{ $list->title }}</button>
                                        <ul>
                                        
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="content">    
            <!--Content-->
            @yield('content')
        </div>
        <div class="map width-100">
            <div class="map__title">Lokalizacja</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d185078.36933961036!2d16.824613765248664!3d52.44751769435821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470444d2ece10ab7%3A0xa4ea31980334bfd1!2zUG96bmHFhA!5e0!3m2!1sen!2spl!4v1672929251828!5m2!1sen!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <footer class="footer width-100">
            <div class="footer__container width-1 block">
                <div class="footer__container__column column column1">
                    <h2 class="footer__container__column__h2">Kontakt</h2>
                    <div class="footer__container__column__text">
                        <p><strong>Telefon Serwis:</strong>+48 513 223 139</p>
                        <p><strong>Telefon Metamorfoza:</strong>+48 513 223 139</p>
                        <p><strong>Telefon Wynajem:</strong>+48 513 223 139</p>
                        <p><strong>E-mail:</strong> autoserwis@serwiss.com</p>
                    </div>
                </div>
                <div class="footer__container__column column column2">
                    <h2 class="footer__container__column__h2">Godziny otwarcia</h2>
                    <div class="footer__container__column__text">
                        <p><strong>Poniedziałek:</strong> 7:00 - 19:00</p>
                        <p><strong>Wtorek:</strong> 7:00 - 19:00</p>
                        <p><strong>Środa:</strong> 7:00 - 19:00</p>
                        <p><strong>Czwartek:</strong> 7:00 - 19:00</p>
                        <p><strong>Piątek:</strong> 7:00 - 19:00</p>
                        <p><strong>Sobota:</strong> 9:00 - 13:00</p>
                    </div>
                </div>
                <div class="footer__container__column column column3">
                    <h2 class="footer__container__column__h2">Lokalizacja</h2>
                    <div class="footer__container__column__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="footer__bottom width-100">
                <div class="footer__bottom__container width-1 block">
                    <div class="footer__bottom__container__project">
                        <p>Projekt i wykonanie:  Piotr Kochanka</p>
                        <p>Zarządzanie: <a href="/login" title="CMS"> CMS</a></p>
                    </div>
                    <div class="footer__bottom__contailer__wcag">
                        
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>