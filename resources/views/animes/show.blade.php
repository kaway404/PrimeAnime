@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-body">
                    {{$anime->name}}
                </div>
            </div>
        </div>
    </div>
@endsection