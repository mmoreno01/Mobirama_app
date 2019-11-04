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
              <a href="/#content_services">Más Servicios</a> 
            </div>
        </div>
        <div class="row serv-iconos">
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
                    <img src="imagenes/contabilidad/Consultoria-AdminEmpresas.png" alt="Consultoría en la Administración de Empresas"  data-toggle="modal" data-target="#consultor">
                    <p>Consultoría en la Administración<br> de Empresas.</p>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <img src="imagenes/contabilidad/Asesoria-PlanFinanciero.png" alt="Asesoría y Planeación Financiera"  data-toggle="modal" data-target="#Asesor">
                    <p>Asesoría y Planeación Financiera.</p>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
                    <img src="imagenes/contabilidad/Gestion-Contable.png" alt="Gestión Contable"  data-toggle="modal" data-target="#gestion">
                    <p>Gestión Contable.</p>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="consultor" tabindex="-1" role="dialog" aria-labelledby="consultorLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="consultorLabel">Consultoría en la Administración de Empresas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Nuestro objetivo fundamental es proporcionar acciones estratégicas e implantar medidas apropiadas para aumentar la productividad y la competitividad de las empresas.</li> 
                </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Asesor" tabindex="-1" role="dialog" aria-labelledby="AsesorLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="AsesorLabel">Asesoría y Planeación Financiera</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Nuestros servicios de Asesoría y Planeación Financiera tiene como objetivo brindar  acompañamiento durante cada fase del ciclo económico de su negocio, integrando las principales variables de su empresa o proyecto a una estrategia financiera claramente definida con metas y objetivos alcanzables.</li> 
                </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="gestion" tabindex="-1" role="dialog" aria-labelledby="gestionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="gestionLabel">Gestión Contable</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Diseñamos un modelo que permita gestionar la contabilidad de su empresa o negocio conforme a la normativa vigente en cada momento y en función de las necesidades contables, financieras y económicas de su compañìa.</li> 
                </ul>
            </div>
          </div>
        </div>
</div>

@stop