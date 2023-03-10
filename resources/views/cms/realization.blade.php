@extends('home')

@section('cms-content')
@if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
<h3 class="cms-title">Realizacje</h3>
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
        @foreach($realizations as $realization)
        <tr>
            <td>{{ $realization->id }}</td>
            <td><div class="wrapper"><a data-fancybox="gallery" href='{{ asset("gallery/news/".$realization->filenames) }}'><img src='{{ asset("gallery/news/".$realization->filenames) }}'></div></td>
            <td>{{ $realization->title }}</td>
            <td><a href="edytuj-realizacje/{{ $realization->id }}"><i class="fa fa-pencil" style="font-size: 18px"></i></a></td>
            <td><button><i class="fa fa-eye" style="font-size: 18px"></i></a></td>
            <td><a href="/home/usun-realizacje/{{ $realization->id }}"><i class="fa fa-trash" style="font-size: 18px"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="cms-new" href="/home/realizacje/dodaj-realizacje" alt="Dodaj nowy">Dodaj nowy</a>


@endsection