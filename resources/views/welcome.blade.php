<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PrimeAnime</title>

        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <link href="/css/screen.css" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        @guest

    <div id="header">
    <div class="containerta">
    <h1 class="logot">PrimeAnime</h1>
    <a href="login"><input type="submit" class="sessao" value="Iniciar sessão"></a>
    <a href="register"><input type="submit" class="sessao" value="Registro"></a>
    </div>
    </div>

    <div class="main">
    <div id="screen-s"></div>
    <div class="overflowmain"></div>
    <style>
    #screen-s{
        background-image: url('{{ $ultimoanime->background }}');
    }
    </style>
        <div class="stream" style="z-index: 2400;">
        <div id="info">
            <p>Free Anime acelerado do Japão + todos os hits!</p>
            <img src="{{ $ultimoanime->logo}}" class="logoa">
            <h3 class="nani">{{ $ultimoanime->about}}</h3>
            <div id="cover-container">
            </div>
        </div>
            <p>Em alta:</p>
            <h2>{{ $ultimoanime->name }}</h2>
        </div>
</div>

    <div class="podesa">
        <div id="animes">
        <h1>Animes populares em nossa plataforma.</h1>
        <div class="overflow">
        @foreach ($animes as $anime)
            <div id="coveranime">
                <img src="{{ $anime->photo }}">
                <div id="footera">
                    <p>{{ $anime->name }}</p>
                </div>
            </div>
            <div class="wow">
                <p>{{ $anime->about }}</p>
                <div id="wowd"></div>
            </div>
    @endforeach
            
            </div>
        </div>
    </div>
    

    <div class="assistaonde">
    <div id="alinhara">
    <h1>Acesse Anime em todos os seus dispositivos!</h1>
    <span>Assista no seu PC ou baixe o aplicativo PrimeAnime para iOS, Android, PlayStation, Xbox One e Apple TV (2015). O PrimeAnime também funciona muito bem com o Google Chromecast, o Apple AirPlay e PCs conectados a TVs.</span>
    <a href="/register"><input class="ja" type="submit" value="Cadastrar"></a>
    <div class="alldevide"></div>
    </div>
    </div>

<div class="singonde">
    <div id="alinhara">
    <h1>Direto do Japão!</h1>
    <span>As melhores fonte,os melhores shows, direto do Japão, rápido para você!</span>
    <input class="ja" type="submit" value="Ver transmissão."> 
    <div class="singonde2"></div>
    </div>
    </div>
    @else
    <script language="JavaScript"> 
window.location="/home"; 
</script>
     @endguest
    </body>
</html>
