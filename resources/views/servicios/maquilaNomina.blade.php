@extends('layout')

@section('content')
<!--imagen principal-->
<div id="content-maquila" class="parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/SeguridadSocial.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown"  data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 100,0">Maquila de Seguridad <br>social </h1>
</div>
<!--fin de imagen principal-->

<!--seccion de contenido-->
<section id="content-textNomina" class="wow fadeInDown"  data-wow-duration="1s" data-wow-delay="1.3s">
 <div class="container">
     <div class="row">
         <div class="col-md-12">
            <article>
                <p>Mobirama cuenta la infraestructura para elaborar y procesar su nómina asumiendo la responsabilidad en la exactitud. Realizamos el cálculo y determinación de Impuestos</p>
                <p>Nuestros Servicios Incluye:</p>
                <ul>
                    <li>Procesamiento correcto de Nómina</li>
                    <li>Altas y Bajas de personal</li>
                    <li>Movimientos ante el IMSS.</li>
                    <li>Captura de Incidencias.</li>
                    <li>Calculo de Percepciones y Retenciones</li>
                </ul>
                 <a href="/#content_services">Más Servicios</a> 
            </article>
         </div>
     </div>
 </div>
</section>
<!--seccion de contenido-->
@stop