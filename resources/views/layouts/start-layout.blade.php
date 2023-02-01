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
    <script type="text/javascript" src="{{ URL::asset('js/lottiefiles.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>

    <!-- Css -->
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/animation.css">
    <link rel="stylesheet" href="/css/start.css">
    <link rel="stylesheet" href="/css/subpage.css">
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>

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
                    <?php $lists = \App\Models\Lists::all()?>
                        <div class="header-data__container__datas">
                            @foreach($lists as $list)
                                @if($list->position === "01. Menu Social")
                                    @if($list->menu == "informacja")
                                        <span>{!! $list->content !!}</span>
                                    @else
                                    @endif
                                @endif
                            @endforeach
                        </div>
                        <div class="header-data__container__social">
                            @foreach($lists as $list)
                                @if($list->position === "01. Menu Social")
                                    @if($list->menu == "link")
                                        <a href="{{ $list->link }}" title="link"><img src="{{ asset('gallery/icons/'.$list->filenames) }}" alt="Image"></a>
                                    @else
                                    @endif
                                @endif
                            @endforeach
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
                            @foreach(\App\Models\Lists::all() as $list)
                                @if($list->position === "02. Menu Górne")
                                    @if($list->menu == "informacja")
                                        <li class="header-main__container__menu__menu-top-1-level__info"><a href="/{{ $list->title }}-{{ $list->id }}" alt="{{ $list->title }}">{{ $list->title }}</a></li>
                                    @elseif($list->menu == "link")
                                        <li class="header-main__container__menu__menu-top-1-level__link"><a href="{{ $list->link }}" alt="{{ $list->title }}" target="_blank" class="header-main__container__menu__menu-top-1-level__link">{{ $list->title }}</a></li>
                                    @elseif($list->menu == "aktualnosci")
                                        <li class="header-main__container__menu__menu-top-1-level__link"><a href="/lista-aktualności" alt="{{ $list->title }}">{{ $list->title }}</a></li>
                                    @else 
                                        <li class="header-main__container__menu__menu-top-1-level__link__menu">
                                            <button>{{ $list->title }}</button>
                                            <ul>
                                            
                                            </ul>
                                        </li>
                                    @endif
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
                @foreach($lists as $list)
                    @if($list->position === "07. Stopka")
                        @if($list->menu == "informacja")
                            <div class="footer__container__column column column1">
                                <h2 class="footer__container__column__h2">
                                    @if(is_null($list->filenames))
                                    @else
                                        <div class="footer__container__column__img">
                                            <img src="../gallery/icons/{{ $list->filenames }}" alt="{{ $list->title }}">
                                        </div>
                                    @endif
                                    {{ $list->title }}
                                </h2>
                                <div class="footer__container__column__text">
                                    {!! $list->content !!}
                                </div>
                            </div>
                        @else 
                        @endif 
                    @endif 
                @endforeach
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