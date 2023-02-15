@extends('home')

@section('cms-content')
@if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
<h3 class="cms-title">Użytkownicy</h3>
<table class="cms-table">
    <thead>
        <tr>
            <th class="th-lp">Lp.</th>
            <th class="th-title">Nazwa</th>
            <th class="th-mail">E-Mail</th>
            <th class="work"></th>
            <th class="work"></th>
            <th class="work"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="edytuj_aktualność/{{ $user->id }}"><i class="fa fa-pencil" style="font-size: 18px"></i></a></td>
            <td><button><i class="fa fa-eye" style="font-size: 18px"></i></a></td>
            <td><a href="/home/usun-aktualnosc/{{ $user->id }}"><i class="fa fa-trash" style="font-size: 18px"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="cms-new" href="/home/uzytkownicy/dodaj-uzytkownika" alt="Dodaj nowy">Dodaj nowy</a>


@endsection