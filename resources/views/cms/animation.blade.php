@extends('home')

@section('cms-content')
<h3 class="cms-title">Animacja</h3>
<table class="cms-table">
    <thead>
        <tr>
            <th class="th-lp">Lp.</th>
            <th class="th-view">Podgląd</th>
            <th class="th-title">Tytuł</th>
            <th class="work"></th>
            <th class="work"></th>
            <th class="work"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($animations as $animation)
        <tr>
            <td>{{ $animation->id }}</td>
            <td><div class="wrapper"><a data-fancybox="gallery" href='{{ asset("gallery/animations/".$animation->filenames) }}'><img src='{{ asset("gallery/animations/".$animation->filenames) }}'></div></td>
            <td>{{ $animation->title }}</td>
            <td><a href="edytuj_animacje/{{ $animation->id }}"><i class="fa fa-pencil" style="font-size: 18px"></i></a></td>
            <td><button><i class="fa fa-eye" style="font-size: 18px"></a></td>
            <td><a href="delete/{{ $animation->id }}"><i class="fa fa-trash" style="font-size: 18px"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="cms-new" href="/home/animacja/dodaj-animacje" alt="Dodaj nowy">Dodaj nowy</a>


@endsection