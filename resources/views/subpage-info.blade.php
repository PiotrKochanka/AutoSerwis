@extends('layouts/start-layout')
@section('content')
    <?php
        $url = Request::url();
        $id = substr($url, strrpos($url, '-') + 1);
    ?>
    <div class="subpage-container width-100">
        <div class="subpage-container__content width-1 block">
            @foreach($lists as $list)
                @if($id == $list->id)
                    <h1 class="subpage-container__content__h1">{{ $list->title }}</h1>
                    <span class="date">{{ $list->start }}</span>
                    <div class="subpage-container__content__all">
                        {!! $list->content !!}
                    </div>
                @endif
            @endforeach
        </div>
    </div>

@endsection