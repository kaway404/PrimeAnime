@extends('layouts.app')
	@section('content')

@foreach ($animes as $anime)

<p>{{$anime->name}}</p>

@endforeach

    @endsection