@extends('layouts.app')
	@section('content')
@foreach($animes as $anime)
            <div id="coveranime">
                <img src="/img/animes/record.jpeg">
                <div id="footera">
                    <p>{{ $anime->name}}</p>
                </div>
            </div>
    @endforeach

    @endsection