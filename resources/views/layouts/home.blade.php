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
<section id="contacto" class="contact">
    <div class="container">
        <form action="/suscripcion/" class="form-email">
            <h3>Contacteme</h3>
            <div>
                <input type="text" placeholder="Dejame tu email" id="email">
            </div>
            <div>
                <input type="tel" placeholder="Número de Télefono" id="telefono">
            </div>
            <div>
                <textarea id="mensaje">
                    Mensaje:
                </textarea>
            </div>
            <button type="submit" value="Enviar">Enviar</button>
        </form>
        <div class="social">
            <a href="https://twitter.com/PabloVillaplan" class="social-link twitter"></a>
            <a href="https://www.facebook.com/pablo.villaplanacorrales" class="social-link facebook"></a>
            <a href="https://github.com/PabloVillaplana" class="social-link github"></a>
            <a href="https://www.instagram.com/pablovillaplanac/" class="social-link instagram"></a>
        </div>
    </div>
</section>
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