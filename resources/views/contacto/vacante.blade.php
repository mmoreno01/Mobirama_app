@extends('layout')

@section('content')
<!-- imagen principal -->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('/imagenes/nosotros/abouts-us.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 100,0">Bolsa de Trabajo</h1>
</div>
<!-- fin de la imagen principal -->
<section id="content-vacante">
    <div class="container">
            <div class="row">
                <div class="col-md-3 content-notices">
                    <vacantenoticias-component></vacantenoticias-component>
                </div>
                <div class="col-md-9 cont-info-vacante">
                        <h2>{{ $ver_vacante->titulo }}</h2> 

                    <div class="info-vacante" >
                           <hr>
                           <p>{!! $ver_vacante->descripcion !!}</p> 
                           <a href="{{ url('/contacto.bolsaTrabajo')}}" class="btn btn-primary">Postularse</a>

                    </div>
                </div>
        </div>
</section>

@endsection