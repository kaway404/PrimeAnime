@guest

@else

@extends('layouts.app')


<style>
.animes-destaque{
    background-image: url('{{ $ultimoanime->background }}');
}
</style>

@section('content')

    <div class="animes-destaque">
        <img src="{{ $ultimoanime->logo}}" class="logoa">
        <h1>{{ $ultimoanime->about}}</h1>
    </div>
    <div class="sectionh animes">
    <div class="container" id="nani">
    <h1>Animes</h1>

@foreach ($animes as $anime)
    <a href="/anime/{{$anime->id}}">
            <div id="coveranime">
                <img src="{{$anime->photo}}">
                <div id="footera">
                    <p>{{$anime->name}}</p>
                </div>
            </div>
    </a>
@endforeach
        </div>
    </div>
@endsection
@endguest