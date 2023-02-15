@extends('layouts.cms-layout')

@section('content')
    <div class="cms-container__content">
        <header class="cms-container__content__header">
            <div class="cms-container__content__header__content">
                <ul class="cms-container__content__header__content__ul">
                    <li class="cms-container__content__header__content__ul__li"><a href="/" target="[_blank]" title="Przejdź do strony">Przejdź do strony</a></li>
                </ul>
            </div>
        </header>
        <div class="cms-container__content__main">
            <div class="cms-container__content__main__col1">
                <div class="cms-container__content__main__col1__title">Zarządzanie</div>
                <ul class="cms-container__content__main__col1__ul">
                    <li class="cms-container__content__main__col1__ul__li">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Wylogowanie') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <li class="cms-container__content__main__col1__ul__li">
                        <a class="dropdown-item" href="/home/uzytkownicy">Użytkownicy</a>
                    </li>
                    <li class="cms-container__content__main__col1__ul__li">
                        <a class="dropdown-item" href="/home/struktura">Struktura</a>
                    </li>
                    <li class="cms-container__content__main__col1__ul__li">
                        <a class="dropdown-item" href="/home/galerie">Galerie</a>
                    </li>
                    <li class="cms-container__content__main__col1__ul__li">
                        <a class="dropdown-item" href="/home/wyslij_pliki">Wyślij pliki</a>
                    </li>
                </ul>
                <br/>
                <div class="cms-container__content__main__col1__title">Moduły</div>
                <ul class="cms-container__content__main__col1__ul">
                    <li class="cms-container__content__main__col1__ul__li">
                        <a class="dropdown-item" href="/home/animacja">Animacja</a>
                    </li>
                    <li class="cms-container__content__main__col1__ul__li">
                        <a class="dropdown-item" href="/home/aktualności">Aktualności</a>
                    </li>
                    <li class="cms-container__content__main__col1__ul__li">
                        <a class="dropdown-item" href="/home/aktualności">Realizacje</a>
                    </li>
                    <li class="cms-container__content__main__col1__ul__li">
                        <a class="dropdown-item" href="/home/aktualności">Oferta</a>
                    </li>
                </ul>
            </div>
            <div class="cms-container__content__main__col2">
                @yield ('cms-content');
            </div>
        </div>
    </div>
@endsection
