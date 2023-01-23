@extends('home')

@section('cms-content')
<h3 class="cms-title">Edytuj element</h3>
<form method="post" action="{{ url('home/zaktualizuj_tresc_elementu/'.$lists->id) }}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form__row">
        <textarea id="myTextarea" class="form-control @error('myTextarea') is-invalid @enderror" name="content" required autocomplete="new-content">  
            {{$lists['content']}}
        </textarea>
    </div>
  <button type="submit" class="form__button" style="margin-top:10px">Edytuj</button>
</form>


@endsection