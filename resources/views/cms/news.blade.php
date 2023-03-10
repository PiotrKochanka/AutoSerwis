@extends('home')

@section('cms-content')
@if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
<h3 class="cms-title">Aktualności</h3>
<table class="cms-table">
    <thead>
        <tr>
            <th class="th-lp">Lp.</th>
            <th class="th-view">Podgląd</th>
            <th class="date">Start</th>
            <th class="date">Stop</th>
            <th class="th-title">Tytuł</th>
            <th class="work"></th>
            <th class="work"></th>
            <th class="work"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($news as $new)
        <tr>
            <td>{{ $new->id }}</td>
            <td><div class="wrapper"><a data-fancybox="gallery" href='{{ asset("gallery/news/".$new->filenames) }}'><img src='{{ asset("gallery/news/".$new->filenames) }}'></div></td>
            <td>{{ $new->start }}</td>
            <td>{{ $new->stop }}</td>
            <td>{{ $new->title }}</td>
            <td><a href="edytuj_aktualność/{{ $new->id }}"><i class="fa fa-pencil" style="font-size: 18px"></i></a></td>
            <td><button><i class="fa fa-eye" style="font-size: 18px"></i></a></td>
            <td><a href="/home/usun-aktualnosc/{{ $new->id }}"><i class="fa fa-trash" style="font-size: 18px"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="cms-new" href="/home/aktualności/dodaj-aktualnosc" alt="Dodaj nowy">Dodaj nowy</a>


@endsection