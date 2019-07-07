@extends('layouts/home')

@section('content')



    @foreach($propiedad as $propiedades)

        <h2 class="titulo">Propiedad {{ $propiedades->nombre}}</h2>
        <div class="wrapper-begin">
            <div class="wrapper firts">
                {{--                <img class="event-image" src="{{ asset('storage').'/'.$propiedades->image }}" alt="eventos"--}}
                {{--                     width="500px">--}}
                <img src="{{ $propiedades->image }}" style="width: 50%"/>
            </div>
            <div class="wrapper second">
                {{--                <h2>{{$propiedades->nombre}}</h2>--}}
                <p>Costo: ¢{{ number_format($propiedades->costo)}}</p>
                <p>Descripción: {{$propiedades->descripcion}}</p>
                <p>Provincia: {{optional($propiedades->provincia)->provincia}}</p>
                <p>Tamaño de Construcción: {{$propiedades->tamano_construccion}} metros cuadrados</p>
                <p>Dirección: {{$propiedades->localizacion}}</p>
{{--                <div>--}}
{{--                    <a href="{{ asset('storage').'/'.$propiedades->avaluo }}">Avaluo</a>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <a href="{{ asset('storage').'/'.$propiedades->plano }}">Plano</a>--}}
{{--                </div>--}}
                <a href="{{url('/')}}">Regresar al listado de usuarios</a>
            </div>

        </div>
    @endforeach


@endsection