@extends('home')

@section('cms-content')

<!-- Menu Górne -->
@if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
@foreach($structures as $structure)
<h1 class="cms-structure-title">{{ $structure->title }}</h1>
<table class="cms-table">
    <thead>
        <tr>
            <th class="th-lp">Lp.</th>
            <th class="th-title">Tytuł</th>
            <th class="th-title">Typ</th>
            <th class="work"></th>
            <th class="work"></th>
            <th class="work"></th>
            <th class="work"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($lists as $list)
            @if( $list->position === $structure->title )
            <tr>
                <td>{{ $list->id }}</td>
                <td>{{ $list->title }}</td>
                <td>{{ $list->menu }}</td>
                <td>
                    @if($list->menu == "informacja")
                        <a title="{{ $list->title }}"  href="edytuj_tresc_elementu/{{ $list->id }}"><i class="fa fa-paste" style="font-size: 18px"></i></a>
                    @elseif($list->menu == "link")
                        <a href="{{ $list->link }}" target="_blank" title="{{ $list->link }}"><i class="fa fa-arrow-up-right-from-square" style="font-size: 18px"></i></a>
                    @elseif($list->menu == "menu")
                        <a title="{{ $list->title }}"><i class="fa fa-bars" style="font-size: 18px"></i></a>
                    @else 
                        <a title="{{ $list->title }}"></a>
                    @endif
                </td>
                <td><a href="edytuj_element/{{ $list->id }}"><i class="fa fa-pencil" style="font-size: 18px"></i></a></td>
                <td><a><i class="fa fa-eye" style="font-size: 18px"></i></a></td>
                <td><a href="/home/usun-pozycje/{{ $list->id }}"><i class="fa fa-trash" style="font-size: 18px"></i></i></a></td>
            </tr>
            @endif
        @endforeach
    </tbody>
</table>
<a class="cms-new" href="/home/struktura/dodaj-element" alt="Dodaj nowy">Dodaj nowy</a>
<br/>
<br/>
<br/>
@endforeach

@endsection