@extends('layout')

@section('content')
<div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="imagenes/capital_humano/capitalh.png" uk-img>
  <h1>Capital Humano</h1>
</div>


<section id="content-txt">
   <!-- <div class="cont-title">
        <h1 class="text-center my-5">Capital <span>Humano</span> </h1>
   </div>  -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <p> Nuestra visión estratégica de soluciones, destinada a la organización y aprovechamiento de los recursos humanos, permite a las empresas laborar bajo un alto grado de efectividad y óptimos resultados incrementando su competitividad dentro del mercado.</p>
              <p>Procesos efectivos y confiables.</p>
              <p>AEquipo de profesionistas con experiencia y compromiso.</p>
              <p>Evaluación continua en cada proceso.</p>
              <p>Constante actualización de método</p>
            </div>
            <div class="col-md-6 img-right">
                <img src="imagenes/contabilidad/conta.png" alt="">
            </div>
        </div>
    </div>
</section>

<!--Seccion del banner Magazine-->
<!-- <section class=" parallax my-5 animated fadeIn" id="banner" style="background-image: url(images/servicios/CapitalHumano.jpg); background-position:center;background-repeat:no-repeat; background-size:cover;   background-attachment: fixed; ">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="cont-conectate">   
                <p><span>Incrementa la rentabilidad de tu empresa.</span></p>
                <p>Solicita una cotización de nuestros servicios.</p>
                <button class="btn"><a href="http://www.jbglobalgroup.com/" target="_blank">Ver más </a></button> 
        </div>
</section> -->
<!--fin de magazine-->



<!--seccion de iconos-->
<section id="serv-iconos" class="py-5">
    <div class="container">
        <div class="row">
           
            <div class="col-md-4">
                    <img src="imagenes/capital_humano/reclutamiento-puro.png" alt="Consultoría en la Administración de Empresas">
                   
               <p>Consultoría en la Administración de Empresas.</p>
            </div>
            <div class="col-md-4">
                    <img src="imagenes/capital_humano/talentoejecutivo.png" alt="Asesoría y Planeación Financiera">
                <p>Asesoría y Planeación Financiera.</p>
            </div>
            <div class="col-md-4">
                <img src="imagenes/capital_humano/datos.png" alt="Gestión Contable">
                <p>Gestión Contable.</p>
            </div>
           
        </div>
    </div>
</section>
<!--seccion de iconos-->

@stop