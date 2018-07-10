@extends('layout')

@section('content')

<div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="imagenes/fiscal/fiscal.jpg" uk-img>
  <h1>Fiscal</h1>
</div>

      
<section id="content-txt">
         <!-- <div class="cont-title">
            <h1 class="text-center my-5">Fis<span>cal</span> </h1>
         </div> -->
         <div class="container">
            <div class="row">
               <div class="col-md-6 text-left">
                  <p>Nuestras amplias habilidades nos permiten implementar mejoras a los procesos contables y fiscales a través de estrategias que permitan obtener una minimización en el impacto fiscal y financiero, cumpliendo siempre con las normatividades vigentes</p>
                  <p>Equipo de especialistas con conocimientos y experiencia en múltiples industrias y sectores</p>
                  <p>Brindamos seguridad y tranquilidad en cada proceso</p>
                  <p>Protegemos tu patrimonio y contribuimos al crecimiento de tu empresa </p>
                  <p>Reestructuras corporativas, fusiones, escisiones, compraventa de acciones a nivel nacional e internacional y conforme al sector al que pertenezcan, a fin de generar cadenas de valor.</p>
                  <p>Interpretación y aplicación de tratados internacionales en materia fiscal y de negocios, asesoría en regímenes fiscales preferentes.</p>
                  <p>Revisión de correcto cumplimiento de obligaciones fiscales e impuestos corporativos.</p>
               </div>
               <div class="col-md-6 img-right">
                  <img src="imagenes/fiscal/fiscal1.png" alt="">
               </div>
            </div>
         </div>
      </section>
      <!--Seccion del banner Magazine-->
      <!-- <section class=" parallax my-5 animated fadeIn" id="banner" style="background-image: url(images/servicios/Fiscal.jpg); background-position:center;background-repeat:no-repeat; background-size:cover;   background-attachment: fixed; ">
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
            <div class="col-md-3 col-sm-6">
                <img src="imagenes/fiscal/asesoriafiscal.png" alt="Consultoría en la Administración de Empresas" data-toggle="modal" data-target="#Consultoria">
               <p>Consultoría Fiscal.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="imagenes/fiscal/defensa.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Derecho">
               <p>Derecho Corporativo.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="imagenes/fiscal/declaracionestatal.png" alt="Gestión Contable" data-toggle="modal" data-target="#Litigio">
               <p>Litigio Fiscal.</p>
            </div>
            <div class="col-md-3 col-sm-6">
              <img src="imagenes/fiscal/declaracionanual.png" alt="Maquila de Nómina" data-toggle="modal" data-target="#controlCons"> 
               <p>Control de Constitucionalidad.</p>            
            </div>
         </div>
      </section>
      <!--seccion de iconos-->

<!--Pop up de iconos -->

 <!-- Modal -->
 <div class="modal fade" id="Consultoria" tabindex="-1" role="dialog" aria-labelledby="ConsultoriaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ConsultoriaLabel">Consultoría Fiscal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ul>
                    <li>Aplicación de estímulos fiscales</li>
                    <li>Confirmación de criterios y consulta sobre situaciones fiscales reales y concretas </li>
                    <li>Ingenierías y estructuras fisca </li>
                    <li>Servicios fiscales internacionales y aplicación de tratados en materia fiscal</li>
                    <li>Asesoría patrimonial</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

  <!-- Modal -->
  <div class="modal fade" id="Derecho" tabindex="-1" role="dialog" aria-labelledby="DerechoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="DerechoLabel">Derecho Corporativo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>ADN empresarial (due-diligence)</li>
                    <li>Reestructuras corporativas: constitución, transformación, fusión, escisión y liquidación de sociedades</li>
                    <li>Gobierno corporativo</li>
                    <li>Tecnología, propiedad industrial, patentes, marcas comerciales y derechos de autor</li>
                    <li> Asesoría a empresas mexicanas con inversión extranjera así como a inversionistas extranjeros en el cumplimiento de las disposiciones legales en la materia</li>
                    <li>Litigio mercantil y arbitraje</li>
                </ul>
            </div>
          </div>
        </div>
      </div>

 <!-- Modal -->
 <div class="modal fade" id="Litigio" tabindex="-1" role="dialog" aria-labelledby="LitigioLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="LitigioLabel">Litigio Fiscal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Defensa fiscal en contra de actos o resoluciones de autoridades fiscales federales y en materia de seguridad social</li>
                    <li>Recursos de revocación (SAT)</li>
                    <li>Juicio de nulidad (TFJFA)</li>
                    <li>Amparo</li>
                    <li>Atención y seguimiento de auditorías iniciadas por parte de las autoridades fiscales</li>
                    <li>Acuerdos conclusivos ante la PRODECON</li>
                    <li>Atención de Procedimiento Administrativo en Materia Aduanera</li>
                    <li>Atención de procedimiento administrativo de ejecución: embargos de cuentas bancarias, requerimientos de pago y embargo, intervención con cargo a la caja, remoción y designación de depositar</li>
                </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="controlCons" tabindex="-1" role="dialog" aria-labelledby="controlConsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="controlConsLabel">Control de Constitucionalidad</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ul>
                    <li>Promoción de juicios de amparo en contra de leyes tributarias inconstitucionales (ISR, IVA, IEPS, impuesto predial)</li>
                    <li>Promoción de juicio de amparo en contra actos de autoridad (aseguramiento precautorio)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
<!--Fin de Pop up de iconos -->
@stop