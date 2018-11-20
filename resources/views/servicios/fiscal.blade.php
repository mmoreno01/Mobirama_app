@extends('layout')

@section('content')
<div class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('imagenes/fiscal/fiscal-img.jpg');">

    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 50,0">Fiscal</h1>

</div>
<!-- <div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="imagenes/fiscal/fiscal.jpg" uk-img>
  <h1>Fiscal</h1>
</div> -->

      
<section id="content-txt">
         <div class="container">
            <div class="row">
               <div class="col-12 text-left">
                  <p>Nuestros profesionistas se capacitan constantemente para brindar un servicio de calidad, que asegure a nuestros clientes el correcto y oportuno cumplimiento de sus obligaciones fiscales, así como también ofrecer estrategias adecuadas para disminuir la carga tributaria, siempre dentro del marco legal correspondiente.</p>
                  {{-- <p>Tenemos el compromiso de brindarle un servicio de calidad mediante los siguientes servicios:</p> --}}
                  {{-- <ul>
                    <li>Asesoría y Planeación Fiscal.</li>
                    <li>Implementación de Defensa Fiscal.</li>
                    <li>Preparación de Declaración de Impuestos Federales y Estatales.</li>
                    <li>Presentación de Declaraciones Informativas y Anuales.</li>
                  </ul> --}}
                 <a href="/home">Más Servicios</a> 
               </div>
            </div>
                <div class="row serv-iconos">
                  <div class="col-md-3 col-sm-6">
                      <img src="imagenes/fiscal/consultor-fiscal.png" alt="Consultoría en la Administración de Empresas" data-toggle="modal" data-target="#Consultoria">
                    <p>Consultoría Fiscal Local e Internacional</p>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <img src="imagenes/fiscal/derccho-corp.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Derecho">
                    <p>Transacciones y Derecho Financiero</p>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <img src="imagenes/fiscal/litg-fiscal.png" alt="Gestión Contable" data-toggle="modal" data-target="#Litigio">
                    <p>Reestructuras Corporativas Holding</p>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <img src="imagenes/fiscal/constit.png" alt="Maquila de Nómina" data-toggle="modal" data-target="#controlCons"> 
                    <p>Proyectos de Inversión e Infraestructura </p>            
                  </div>
                </div>
                <div class="row serv-iconos">
                    <div class="col-md-4">
                        <img src="imagenes/fiscal/derccho-corp.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Derecho">
                        <p>Asesoría Patrimonial</p>
                    </div>
                    <div class="col-md-4">
                        <img src="imagenes/fiscal/derccho-corp.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Derecho">
                        <p>Alianzas Estratégicas (Joint Ventures) y Due Diligence </p>
                    </div>
                    <div class="col-md-4">
                        <img src="imagenes/fiscal/derccho-corp.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Derecho">
                        <p>Cumplimiento Fiscal</p>
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
              <h5 class="modal-title" id="ConsultoriaLabel">Consultoría Fiscal Local e Internacional</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ul>
                    <li>Ofrecemos un análisis e interpretación sobre diversas disposiciones fiscales nacionales e internacionales, con objeto de que nuestros clientes cuenten con certeza jurídica para optimizar las cargas tributarias que les correspondan, así como la prevención de la doble tributación internacional, atendiendo las disposiciones fiscales vigentes.</li>
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
              <h5 class="modal-title" id="DerechoLabel">Transacciones y Derecho Financiero</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <p>Llevamos a cabo análisis financieros desde un punto de vista fiscal de los diversos tipos de financiamientos que obtengan u otorguen nuestros clientes, bien sean en nuestro país o en el extranjero. También participamos en operaciones de financiamiento a través de mercados bursátiles y bursatilización de activos.</p> 
            <p>Derecho corporativo:</p>
                <ul>
                    <li>Preparación, negociación y revisión de contratos.</li>
                    <li>Restructuras corporativas.</li>
                    <li>Atención a conflictos entre accionistas.</li>
                    <li>Implementación de gobierno corporativo.</li>
                    <li>Compras de gobierno.</li>
                    <li>Organización y estructura de negocios familiares.</li>
                    <li>Atención de consultas generales respecto a las posibles consecuencias legales de ciertas decisiones.</li>
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
              <h5 class="modal-title" id="LitigioLabel">Reestructuras Corporativas Holding</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <p>Llevamos a cabo el análisis sobre las implicaciones fiscales derivadas de proyectos de reestructuración tales como escisiones, fusiones, adquisiciones y cualquier clase de reestructuración corporativa con el fin de que nuestros clientes operen de una manera más eficiente tanto en México como en el extranjero.</p>
               <p>Fusiones y adquisiciones:</p>
                <ul>
                    <li>Análisis de riesgos en la toma de decisiones de adquisición o fusión de empresas.</li>
                    <li>Due Diligence.</li>
                    <li>Compra y venta de empresas.</li>
                    <li>Fusiones y escisiones.</li>
                    <li>Co-inversiones.</li>
                    <li>Asociaciones estratégicas.</li>
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
              <h5 class="modal-title" id="controlConsLabel">Proyectos de Inversión e Infraestructura </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <p>Efectuamos diferentes análisis desde un punto de vista fiscal, respecto a la manera más conveniente de invertir y estructurar proyectos de inversión e infraestructura, incluyendo la revisión y elaboración de los aspectos fiscales a considerar dentro de los modelos financieros que se utilizan para evaluar este tipo de proyectos, atendiendo en todo momento a las expectativas propias de cada compañía. De igual forma, la Firma cuenta con una sólida especialización y experiencia en las áreas de Desarrollos Inmobiliarios y de Fondos de Inversión Extranjeros invirtiendo en proyectos a mediano y largo plazo. A este respecto, contamos con amplia experiencia en el establecimiento de estructuras o vehículos de inversión inmobiliarios, atendiendo a las características y áreas del mercado, tales como Fideicomisos de Infraestructura y Bienes Raíces (FIBRAS), Sociedades de Infraestructura y Bienes Raíces (SIBRAS), fideicomisos o sociedades mercantiles, etc.</p>
            </div>
          </div>
        </div>
      </div>
<!--Fin de Pop up de iconos -->
@stop