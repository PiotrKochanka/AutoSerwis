@extends('home')

@section('cms-content')
<h3 class="cms-title">{{ $galleries['name'] }}</h3>
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
        @foreach($files as $file)
            @if($galleries['id'] === $file->galleryId && $file->filename > 0)
                <tr>
                    <td>{{ $file->id }}</td>
                    <td><div class="wrapper"><a data-fancybox="gallery" href='{{ asset("gallery/photogallery/".$file->filename) }}'><img src='{{ asset("gallery/photogallery/".$file->filename) }}'></div></td>
                    <td>{{ $file->filename }}</td>
                    <td><a href="edytuj_aktualność/{{ $file->id }}"><i class="fa fa-pencil" style="font-size: 18px"></i></a></td>
                    <td><button><i class="fa fa-eye" style="font-size: 18px"></i></a></td>
                    <td><a href="/home/usun-aktualnosc/{{ $file->id }}"><i class="fa fa-trash" style="font-size: 18px"></i></a></td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>


@endsection