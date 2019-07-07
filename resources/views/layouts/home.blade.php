<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real State Arcos Dorados</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- <link rel="stylesheet" href="css/media.css" media="screen and (max-width:768px)"/> -->
    <link rel="stylesheet" href="{{ asset('css/custom.css')  }}">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro&display=swap" rel="stylesheet">

</head>
<body>
<i class="icon-menu burguer-button" id="burguer-menu"></i>
<header class="header">
    <div class="container">
        <figure class="logo" style="display: flex">
            <img src="{{asset('images/icono-real.png')}}" alt="" height="50px" style="color: white">
            <a class="namestate">REAL STATE ARCOS DORADOS</a>
            {{--             <h2>JUAN PABLO VILLAPLANA</h2>--}}
        </figure>
        <nav class="menu">
            <ol>
                <li>
{{--                    <a class="link" href="{{route('propiedad.index')}}">Propiedades</a>--}}
                </li>
                {{--                <li>--}}
                {{--                    <a class="link" href="#eventos">Experencia</a>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <a class="link" href="#contacto">Trabajemos Juntos</a>--}}
                {{--                </li>--}}
            </ol>
        </nav>
    </div>
</header>
<div class="container">
</div>
<div class="container">
    @yield('content')
</div>
<footer class="footer">
    <div class="container">
        <div>
            <p>Real State Arcos Dorados 2019 </p>
        </div>
        <div>
            <p>Desarrollado by <a href="villaplana.me">Villaplana</a></p>
        </div>
    </div>
</footer>
</body>
</html>