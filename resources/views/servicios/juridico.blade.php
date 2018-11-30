@extends('layout')

@section('content')
<!--imagen principal-->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s"  uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Juridico.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 90,0">Juridico</h1>
</div>
<!--fin imagen principal-->
      
<section id="content-txt">
         <div class="container">
            <div class="row">
               <div class="col-12 text-left wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s">
                  <p>Las amplias habilidades de los colaboradores nos permiten implementar mejoras a los procesos contables y fiscales a través de estrategias que permitan obtener una minimización en el impacto fiscal y financiero, cumpliendo siempre con las normatividades vigentes</p>
                  <p>Tenemos el compromiso de brindarle un servicio de calidad mediante los siguientes servicios:</p>
                  <ul>
                    <li>Asesoría y Planeación Fiscal.</li>
                    <li>Implementación de Defensa Fiscal.</li>
                    <li>Preparación de Declaración de Impuestos Federales y Estatales.</li>
                    <li>Presentación de Declaraciones Informativas y Anuales.</li>
                  </ul>
                 <a href="home#content_services">Más Servicios</a> 
               </div>
            </div>
                <div class="row serv-iconos">
                  <div class="col-md-3 col-sm-6 wow fadeInUp"data-wow-duration="0.5s" data-wow-delay="0.1s">
                      <img src="imagenes/fiscal/consultor-fiscal.png" alt="Consultoría en la Administración de Empresas" data-toggle="modal" data-target="#Consultoria">
                    <p>Consultoría Fiscal.</p>
                  </div>
                  <div class="col-md-3 col-sm-6 wow fadeInUp"data-wow-duration="0.5s" data-wow-delay="0.3s">
                      <img src="imagenes/fiscal/derccho-corp.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Derecho">
                    <p>Derecho Corporativo.</p>
                  </div>
                  <div class="col-md-3 col-sm-6 wow fadeInUp"data-wow-duration="0.5s" data-wow-delay="0.6s">
                      <img src="imagenes/fiscal/litg-fiscal.png" alt="Gestión Contable" data-toggle="modal" data-target="#Litigio">
                    <p>Litigio Fiscal.</p>
                  </div>
                  <div class="col-md-3 col-sm-6 wow fadeInUp"data-wow-duration="0.5s" data-wow-delay="0.9s">
                    <img src="imagenes/fiscal/constit.png" alt="Maquila de Nómina" data-toggle="modal" data-target="#controlCons"> 
                    <p>Control de Constitucionalidad.</p>            
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
      <!-- <section id="serv-iconos" class="py-5">
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
      </section> -->
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