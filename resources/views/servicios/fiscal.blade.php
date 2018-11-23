@extends('layout')

@section('content')
<!-- imagen principal -->
<div class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Fiscal.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 50,0">Fiscal</h1>
</div>
<!-- fin imagen principal -->

      
<section id="content-txt">
         <div class="container">
            <div class="row">
               <div class="col-12 text-left">
                  <p>Nuestros profesionistas se capacitan constantemente para brindar un servicio de calidad, que asegure a nuestros clientes el correcto y oportuno cumplimiento de sus obligaciones fiscales, así como también ofrecer estrategias adecuadas para disminuir la carga tributaria, siempre dentro del marco legal correspondiente.</p>
                 <a href="/home">Más Servicios</a> 
               </div>
            </div>
                <div class="row serv-iconos">
                  <div class="col-md-3 col-sm-6">
                      <img src="imagenes/fiscal/new-icons/Fiscal-Internacional.png" alt="Consultoría en la Administración de Empresas" data-toggle="modal" data-target="#Consultoria">
                    <p>Consultoría Fiscal Local e Internacional</p>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <img src="imagenes/fiscal/new-icons/Transacciones-Derecho.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Transacciones">
                    <p>Transacciones y Derecho Financiero</p>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <img src="imagenes/fiscal/new-icons/RestructurasCorp.png" alt="Gestión Contable" data-toggle="modal" data-target="#Proyectos">
                    <p>Reestructuras Corporativas Holding</p>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <img src="imagenes/fiscal/new-icons/inversion-infrestructura.png" alt="Maquila de Nómina" data-toggle="modal" data-target="#Reestructuras"> 
                    <p>Proyectos de Inversión e Infraestructura </p>            
                  </div>
                </div>
                <div class="row serv-iconos">
                <div class="col-md-3">
                        <img src="imagenes/fiscal/new-icons/CapitalPrivado.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Capital">
                        <p>Capital Privado y Capital de Riesgo </p>
                    </div>
                    <div class="col-md-3">
                        <img src="imagenes/fiscal/new-icons/AsesoriaPatrimonial.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Asesoría">
                        <p>Asesoría Patrimonial</p>
                    </div>
                    <div class="col-md-3">
                        <img src="imagenes/fiscal/new-icons/AlianzasEstrategicas.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Alianzas">
                        <p>Alianzas Estratégicas (Joint Ventures) y Due Diligence </p>
                    </div>
                    <div class="col-md-3">
                        <img src="imagenes/fiscal/new-icons/CumplimientoFiscal.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Cumplimiento">
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
  <div class="modal fade" id="Transacciones" tabindex="-1" role="dialog" aria-labelledby="TransaccionesLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="TransaccionesLabel">Transacciones y Derecho Financiero</h5>
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
 <div class="modal fade" id="Reestructuras" tabindex="-1" role="dialog" aria-labelledby="ReestructurasLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ReestructurasLabel">Reestructuras Corporativas Holding</h5>
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
      <div class="modal fade" id="Proyectos" tabindex="-1" role="dialog" aria-labelledby="ProyectosLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ProyectosLabel">Proyectos de Inversión e Infraestructura </h5>
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

       <!-- Modal -->
      <div class="modal fade" id="Capital" tabindex="-1" role="dialog" aria-labelledby="CapitalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="CapitalLabel">Capital Privado y Capital de Riesgo  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <p>Nuestra Firma participa de manera activa en el mercado de Capital Privado y Capital de Riesgo, toda vez que somos asesores del Órgano del Gobierno que invierte en los distintos Fondos de Capital Privado y de Capital de Riesgo que se han constituido en los últimos años, además de que asesoramos a diversos fondos directamente.</p>
            </div>
          </div>
        </div>
      </div>
      
       <!-- Modal -->
      <div class="modal fade" id="Asesoría" tabindex="-1" role="dialog" aria-labelledby="AsesoríaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="AsesoríaLabel">Asesoría Patrimonial   </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <p>Con objeto de brindar un valor agregado a nuestros clientes, contamos con un área especializada en asesoría patrimonial, la cual se enfoca principalmente en el desarrollo e implementación de esquemas sucesorios y de inversión, así como en el análisis y determinación de los efectos fiscales derivados de cualquier estructura que se tenga establecida o inversión que se mantenga, ya sea en México o en el extranjero, proporcionando para este efecto asesoría para el cumplimiento de las obligaciones fiscales que en su caso pudieran generarse por los ingresos que deriven de dichas inversiones.</p>
            </div>
          </div>
        </div>
      </div>

       <!-- Modal -->
      <div class="modal fade" id="Alianzas" tabindex="-1" role="dialog" aria-labelledby="AlianzasLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="AlianzasLabel">Alianzas Estratégicas (Joint Ventures) y Due Diligence</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <p>En los últimos años, la industria mexicana se ha integrado a las cadenas productivas internacionales y, por ende, ha venido estableciendo alianzas estratégicas con empresas extranjeras, por lo cual nuestra Firma se encuentra en posibilidad de asesorar fiscalmente a los diferentes tipos de alianzas que se lleven a cabo. En este sentido, apoyamos a nuestros clientes, en la definición de la estrategia y estructura fiscal más conveniente para implementar estas alianzas en México. </p>
                  <p>Promociones ante las Autoridades y Solicitudes de Devolución de Impuestos Nuestra Firma lleva a cabo cualquier trámite ante las autoridades fiscales respecto de resoluciones de cuestiones de negocios no previstas por las disposiciones tributarias, así como la atención y gestión de revisiones realizadas a las compañías por parte de dichas autoridades fiscales. Asimismo, proporcionamos asesoría y/o gestión en la solicitud de devoluciones de contribuciones ante las autoridades correspondientes. </p>
                  <p>Las solicitudes de devolución presentadas ante las autoridades fiscales, han adquirido gran relevancia, pues independientemente de la integración de las cantidades que se solicitan en devolución y la documentación que soporta las mismas; la unidad administrativa del Servicio de Administración Tributaria que autoriza las devoluciones es la misma que puede ejercer facultades para comprobar el debido cumplimiento de las obligaciones fiscales de los contribuyentes que solicitan la devolución de contribuciones.</p>
            </div>
          </div>
        </div>
      </div>

        <!-- Modal -->
      <div class="modal fade" id="Cumplimiento" tabindex="-1" role="dialog" aria-labelledby="CumplimientoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="CumplimientoLabel">Cumplimiento Fiscal </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <p>En este ramo, brindamos apoyo al personal de las empresas para el correcto cumplimiento de sus obligaciones fiscales, a través de la asesoría personalizada en la adecuada determinación de los impuestos a cargo de las empresas, así como en la continua actualización respecto de los cambios a las disposiciones fiscales. </p>
                  
            </div>
          </div>
        </div>
      </div>
<!--Fin de Pop up de iconos -->
@stop