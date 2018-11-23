@extends('layout')

@section('content')
<!--imagen principal-->
<div class="parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/CapitalHumano.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 100,0">Capital Humano</h1>
</div>
<!--fin de imagen principal-->


<section id="content-txt">
      <div class="container">
        <div class="row">
            <div class="col-12 text-left">
              <p class="sub-title text-center">Damos valor a su empresa al proporcionar un capital humano altamente efectivo y dispuesto a lograr los objetivos organizacionales.</p>  
              <p> Nuestra visión estratégica de soluciones, destinada a la organización y aprovechamiento de los recursos humanos, permite a las empresas laborar bajo un alto grado de efectividad y óptimos resultados incrementando su competitividad dentro del mercado.</p>
              
              <ul>
                  <li>Procesos efectivos y confiables</li>
                  <li>Equipo de profesionistas con experiencia y compromiso</li>
                  <li>Evaluación continua en cada proceso</li>
                  <li>Constante actualización de método</li>
              </ul>  
              <a href="/home">Más Servicios</a> 
            </div>
        </div>
        <div class="row serv-iconos">
           
           <div class="col-md-4">
                   <img src="imagenes/capital_humano/reclut.png" alt="Consultoría en la Administración de Empresas">
                  
              <p>Reclutamiento Puro</p>
           </div>
           <div class="col-md-4">
                   <img src="imagenes/capital_humano/talento.png" alt="Asesoría y Planeación Financiera">
               <p>Búsqueda de Talento Ejecutivo</p>
           </div>
           <div class="col-md-4">
               <img src="imagenes/capital_humano/est-veri.png" alt="Gestión Contable">
               <p>Estudios de Verificación de Datos</p>
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
<!-- <section id="serv-iconos" class="py-5">
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
</section> -->
<!--seccion de iconos-->

@stop