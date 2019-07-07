@extends('layouts.home')

@section('content')

    <div class="container">
        <h2>Listado de Propiedades</h2>
    </div>
    <section id="eventos" class="propiedad-list">
        <div class="container">
            @if($propiedad->isNotEmpty())
            @foreach($propiedad as $propiedades)

                <article class="propiedad">
                    <figure class="propiedad=imageContainer">
                        <img class="event-image" src="{{$propiedades->image }}" alt="eventos" width="500px">
                    </figure>
                    <div class="propiedad-detail">
                        <h3 class="propiedad-title">{{$propiedades->nombre}}</h3>

                        <p class="propiedad-description">¢{{ number_format($propiedades->costo)}}</p>
                        <a class="propiedad-url" href="{{route('propiedad.details', $propiedades)}}">Ver propiedad</a>
                    </div>
                </article>
            @endforeach
            @else
                <h1>PRONTO TENDREMOS PROPIEDADES EN VENTA</h1>
                <h2>NECESITAMOS UN MEJOR LAYOUT DE HOME </h2>
            @endif
        </div>
    </section>
@endsection