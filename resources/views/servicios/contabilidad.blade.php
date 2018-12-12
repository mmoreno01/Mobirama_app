@extends('layout')

@section('content')

<!--imagen principal-->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Contabiliad.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 50,0">Contabilidad Outsourcing</h1>
</div>
<!--fin de imagen principal-->

<section id="content-txt">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s">
              <p class="sub-title text-center">Aportamos valor a las empresas al proporcionar un capital humano altamente efectivo y dispuesto a lograr los objetivos organizacionales.</p>
              <p>La visión estratégica se encuentra destinada a la organización y aprovechamiento de los recursos humanos, permitiendo  a las empresas laborar bajo un alto grado de efectividad y óptimos resultados incrementando su competitividad dentro del mercado.</p>
              <ul>
                  <li>Consultoría en la Administración de Empresas.</li>
                  <li>Asesoría y Planeación Financiera.</li>
                  <li>Gestión Contable.</li>
              </ul>
              <a href="home#content_services">Más Servicios</a> 
            </div>
        </div>
        <div class="row serv-iconos">
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
                    <img src="imagenes/contabilidad/Consultoria-AdminEmpresas.png" alt="Consultoría en la Administración de Empresas">
                    <p>Consultoría en la Administración<br> de Empresas.</p>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <img src="imagenes/contabilidad/Asesoria-PlanFinanciero.png" alt="Asesoría y Planeación Financiera">
                    <p>Asesoría y Planeación Financiera.</p>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
                    <img src="imagenes/contabilidad/Gestion-Contable.png" alt="Gestión Contable">
                    <p>Gestión Contable.</p>
            </div>
        </div>
    </div>
</section>
@stop