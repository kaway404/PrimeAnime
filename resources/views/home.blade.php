@guest

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 72px;
				margin-bottom: 40px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">404 NOT FOUND</div>
			</div>
		</div>

@else

@extends('layouts.app')

<style>
.animes-destaque{
    background-image: url('{{ $ultimoanime->background }}');
}

#lol{
	background: linear-gradient(to top, rgba(1, 1, 1,0.7), rgba(41, 128, 185,0));
    width: 100%;
    position: absolute;
    bottom: 75px;
    height: 150px;
}
</style>

@section('content')

    <div class="animes-destaque">
    <div class="container">
        <img src="{{ $ultimoanime->logo}}" class="logoa">
        <h1>{{ $ultimoanime->about}}</h1>
    </div>
	<div id="lol"></div> 
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