@section('meta')
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="keywords"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>
<title>Kursach</title>
</head>
<body>
@show
@section('menu')
    <div class="main">
        <div class="container"><div class="inner_copy"><div class="inner_copy"></div></div>
            <div class="gfx"></div>
            <div class="menu">
                <a href="/"><span>Главная</span></a>
                <a href="/home"><span>Вход</span></a>
                <a href="/lib/reads"><span>Список читателей</span></a>
                <a href="/lib/books"><span>Список книг</span></a>
                <a href="/lib/orders"><span>Список выданных книг</span></a>
                <a href="/lib/createorders" id="last"><span>Выдача книг</span></a>
            </div>
            <div class="content">
                @show

                @section('content')
                @show

                @section('footer')
            </div>
        </div>
    </div>
</body>
</html>
@show