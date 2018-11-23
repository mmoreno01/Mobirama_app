@extends('layout')

@section('content')

<!--imagen principal-->
<div class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Contabiliad.jpg');">
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 50,0">Contabilidad Outsourcing</h1>
</div>
<!--fin de imagen principal-->

<section id="content-txt">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left">
              <p class="sub-title text-center">Colaboramos en el potencial de tu negocio ofreciéndote la siguiente gama de servicios</p>
              <p>Trabajamos junto con ustedes; para agregar valor a su Empresa en el entorno económico, social y de mercado. Somos expertos profesionistas que creamos respuestas a cada una de sus necesidades; mediante estrategias sustentables.</p>
              <ul>
                  <li>Consultoría en la Administración de Empresas.</li>
                  <li>Asesoría y Planeación Financiera.</li>
                  <li>Gestión Contable.</li>
              </ul>
              <a href="/home">Más Servicios</a> 
            </div>
        </div>
        <div class="row serv-iconos">
            <div class="col-md-4 col-sm-4">
                    <img src="imagenes/contabilidad/Consultoria-AdminEmpresas.png" alt="Consultoría en la Administración de Empresas">
                    <p>Consultoría en la Administración de Empresas.</p>
            </div>
            <div class="col-md-4 col-sm-4">
                    <img src="imagenes/contabilidad/Asesoria-PlanFinanciero.png" alt="Asesoría y Planeación Financiera">
                    <p>Asesoría y Planeación Financiera.</p>
            </div>
            <div class="col-md-4 col-sm-4">
                    <img src="imagenes/contabilidad/Gestion-Contable.png" alt="Gestión Contable">
                    <p>Gestión Contable.</p>
            </div>
        </div>
    </div>
</section>
@stop