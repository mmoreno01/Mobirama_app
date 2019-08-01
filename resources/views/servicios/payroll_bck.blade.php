@extends('layout')

@section('content')
<!--imagen principal-->
<div class="parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Payroll.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 50,0">Payroll Service</h1>
</div>
<!--fi imagen principal-->

<section id="content-txt">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s">
              <p>La división de Payroll BPO asume el proceso de nómina de las empresas a través de un sólido esquema que cubre todos los hitos de esta disciplina. Basamos nuestra metodología certificada bajo la norma ISO 9001:2015, Lo cual significa que centramos los procesos en las necesidades de los clientes sin importar su ubicación</p>
              <ul>
                  {{-- <li>Mejora el aprovechamiento del capital humano</li>
                  <li>Reduce costos y tiempos de operación</li>
                  <li>Asegura la confidencialidad de la información y mejora el control interno</li>
                  <li>Restringe riesgos por incumplimiento fiscal</li> --}}
              </ul>
              <a href="/#content_services">Más Servicios</a> 
            </div>
        </div>
        <div class="card-columns">
            <div class="card" data-wow-duration="0.5s" data-wow-delay="0.1s">
                <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#NÓMINA">
                  <div class="card-body">
                    <h5 class="card-title">BPO MAQUILA DE NÓMINA</h5>
                  </div> 
            </div>
            <div class="card" data-wow-duration="0.5s" data-wow-delay="0.3s">
                  <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#HRP">
                    <div class="card-body">
                      <h5 class="card-title">BPO MAQUILA DE NÓMINA IMPLEMENTACIÓN DE HRP</h5>
                    </div>  
                </div>
            <div class="card" data-wow-duration="0.5s" data-wow-delay="0.6s">
                  <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#MANAGEMENT">
                    <div class="card-body">
                      <h5 class="card-title">TAX PAYROLL MANAGEMENT</h5>
                    </div>   
            </div>
      
           <div class="card" data-wow-duration="0.5s" data-wow-delay="0.1s">
                <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#CFDI">
                  <div class="card-body">
                    <h5 class="card-title">CFDI IMPLEMENTACIÓN Y OPERACIÓN </h5>
                  </div>    
           </div>
          
           <div class="card" data-wow-duration="0.5s" data-wow-delay="0.6s">
                <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#FORENSIC">
                  <div class="card-body">
                    <h5 class="card-title">PAYROLL FORENSIC</h5>
                  </div> 
           </div>
           <div class="card" data-wow-duration="0.5s" data-wow-delay="0.3s">
            {{-- <img src="imagenes/payroll/asesorias.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#PayAsesoria">
        <p>Asesoría.</p> --}}
          </div>
       </div>
    </div>
</section>

<!--Seccion de pop up-->

<!-- Modal -->
<div class="modal fade" id="NÓMINA" tabindex="-1" role="dialog" aria-labelledby="NÓMINALabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="NÓMINALabel">BPO MAQUILA DE NÓMINA </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Alternativa rentable para llevar un control puntual de la nómina permitiendo a la empresa dedicar recursos a los aspectos y sustantivos de la organización.</li>
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="HRP" tabindex="-1" role="dialog" aria-labelledby="HRPLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="HRPLabel">BPO MAQUILA DE NÓMINA IMPLEMENTACIÓN DE HRP </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Desarrollamos y parametrizamos diversos sistemas de nómina “state ofthe art” dependiendo de las características de su negocio.</li> 
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="MANAGEMENT" tabindex="-1" role="dialog" aria-labelledby="MANAGEMENTLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="MANAGEMENTLabel">TAX PAYROLL MANAGEMENT </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>
                        El cumplimiento de las regulaciones en materia de seguridad social (en todas sus ramas), cuentas Individuales (retiro y cesantía), INFONAVIT, Impuestos Estatales, CFDI 3.3, con sus continuos cambios, requieren de equipos profesionales y altamente capacitados, así como sistemas HRP de vanguardia. Atención a autoridades y en su caso, los litigios en estas materias están incluidas en esta práctica.
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="CFDI" tabindex="-1" role="dialog" aria-labelledby="CFDILabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="CFDILabel">CFDI IMPLEMENTACIÓN Y OPERACIÓN </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>
                        Construcción de XML y timbrado de recibos de nómina conforme a los catálogos de información del SAT (versión 3.3 y sucedáneas).
                    </li>
                </ul> 
            </div>
          </div>
        </div>
      </div>
      
<!-- Modal -->
<div class="modal fade" id="FORENSIC" tabindex="-1" role="dialog" aria-labelledby="FORENSICLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="FORENSICLabel">CFDI implementación y operación</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <ul>
                            <li>Ofrecemos los servicios de blindaje a los sistemas de nóminas, a través del uso de métodos de Auditoría Forense, lo cual permite a las empresas prevenir y detectar fraudes en la administración de estos sistemas, usando para ello una metodología propia que combina las normas de auditoría, reglas ACFE y mejores prácticas de la industria, así como el aprovechamiento de fuentes internas y externas de información.</li>        
                    </ul>
            </div>
          </div>
        </div>
      </div>
      
@stop