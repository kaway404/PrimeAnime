@guest

@else

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

.about{
    float: right;
    max-width: 35%;
    max-height: 160px;
    height: auto;
    overflow: hidden;
    overflow-y: auto;
    background: rgba(0,0,0,0.6);
    border-radius: 3px;
    color: #fff;
    padding: 4px;
    position: relative;
    font: 500 0.8em 'Montserrat', sans-serif;
    line-height: 20px;
    bottom: 200px;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0,1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0,1);
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0,1);
}

.about p{
    font-size: 15px;
}

.episode{
    width: 100%;
    background: #3e2d7d;
    color: #fff;
    position: relative;
    top: 15px;
    margin-top: 9px;
    padding: 0px;
    cursor: pointer
}

.episode:hover{
    background: #22164c;
}

.episode p{
    padding: 10px;
    font-size: 19px;
}

a{
    text-decoration: none !important;
}

</style>
@section('content')
                <div class="animes-destaques"><div id="lol"></div></div>
                <div class="container">
                <div class="anime">
                <img src="{{$anime->photo}}">
                </div>
                <div class="about">
                <p>{{$anime->about}}</p>
                </div>
                </div>
                <div id="wt">
                <div class="container">
                <h1 class="wtf">{{$anime->name}}</h1>
                </div>
                </div>

                <div class="container">
                @foreach ($episodes as $episode)
                <a href="/assistir/{{$episode->id}}"><li class="episode">
                <p>Episódio : {{$episode->name}}</p>
                </li></a>
                @endforeach
                </div>  

@endsection

@endguest