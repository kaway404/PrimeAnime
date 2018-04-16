@extends('layouts.app')

@section('content')


    <div class="animes-destaque">
    </div>
    <div class="sectionh animes">
    <div class="container" id="nani">
    <h1>Animes</h1>

@foreach ($animes as $anime)
            <div id="coveranime">
                <img src="{{$anime->photo}}g">
                <div id="footera">
                    <p>{{$anime->name}}</p>
                </div>
            </div>
@endforeach
        </div>
        
    </div>

@endsection
