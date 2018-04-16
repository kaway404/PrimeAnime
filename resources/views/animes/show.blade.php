@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-body">
                    @foreach($Animes as $anime)
                        <div class="card card-default">
                            <div class="card-header">
                                {{ $anime->name }}
                            </div>
                            <div class="card-body">
                                {{ $anime->about }}
                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection