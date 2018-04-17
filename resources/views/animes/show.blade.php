@extends('layouts.app')
<style>
.animes-destaques{
    background-image: url('{{ $anime->background }}');
    width: 100%;
    height: 400px;
    background-size: cover;
}
.wtf{
    position: relative;
    font-size: 29px;
    color: #fff;
    padding: 7px;
}

.anime{
    width: 150px;
    height: 200px;
    box-shadow: 0px 0px 10px 0px rgb(62, 45, 125);
    position: absolute;
    top: 210px;
}

.anime img{
    width: 100%;
    height: 100%;
}

#wt{
    width: 100%;
    height: 50px;
    background: #3e2d7d;
    position: relative;
}

#lol{
    background: linear-gradient(to top, rgba(1, 1, 1,0.7), rgba(41, 128, 185,0));
    width: 100%;
    position: relative;
    top: 250px;
    height: 150px;
}

</style>
@section('content')
                <div class="animes-destaques"><div id="lol"></div></div>
                <div class="container">
                <div class="anime">
                <img src="{{$anime->photo}}">
                </div>
                </div>
                <div id="wt">
                <div class="container">
                <h1 class="wtf">{{$anime->name}}</h1>
                </div>
                </div>
@endsection