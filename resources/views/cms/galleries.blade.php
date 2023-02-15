@extends('home')

@section('cms-content')
@if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
<h3 class="cms-title">Galerie</h3>
<table class="cms-table">
    <thead>
        <tr>
            <th class="th-lp">Lp.</th>
            <th class="th-title">Tytuł</th>
            <th class="work"></th>
            <th class="work"></th>
            <th class="work"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($galleries as $gallery)
        <tr>
            <td>{{ $gallery->id }}</td>
            <td>{{ $gallery->name }}</td>
            <td><a href="galerie/{{ $gallery->id }}"><i class="fa fa-folder" style="font-size: 18px; color: grey;"></i></a></td>
            <td><a href="edytuj_aktualność/{{ $gallery->id }}"><i class="fa fa-pencil" style="font-size: 18px;"></i></a></td>
            <td><a href="/home/usun-aktualnosc/{{ $gallery->id }}"><i class="fa fa-trash" style="font-size: 18px"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="cms-new" href="/home/galerie/dodaj_galerie" alt="Dodaj nowy">Dodaj nowy</a>


@endsection