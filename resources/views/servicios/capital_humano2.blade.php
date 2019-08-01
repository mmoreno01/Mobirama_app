@extends('layout')

@section('content')
<!--imagen principal-->
<div class="parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/CapitalHumano.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 100,0">Administración de personal</h1>
</div>
<!--fin de imagen principal-->


<section id="content-txt">
      <div class="container">
        <div class="row">
            <div class="col-12 text-left wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s">
              <!--<p class="sub-title text-center">Hemos innovado el concepto de administración de personal al incluir en su portafolio de servicios una serie de soluciones que faciliten la administración del personal, bajo esquemas rentables para el cliente y altamente competitivos en el mercado.</p>-->  
              <p>Hemos innovado el concepto de administración de personal al incluir en su portafolio de servicios una serie de soluciones que faciliten la administración del personal, bajo esquemas rentables para el cliente y altamente competitivos en el mercado.</p>
                           
     
              <a href="/#content_services">Más Servicios</a> 
            </div>
        </div>
        <div class="card-columns">
           <div class="card">
                <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#GESTIÓN"> 
                    <div class="card-body">
                        <h5 class="card-title">GESTIÓN DE ATRACCIÓN DE TALENTO</h5>
                  </div>
           </div>
           <div class="card">
                <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#RECLUTAMIENTO"> 
                    <div class="card-body">
                        <h5 class="card-title">RECLUTAMIENTO </h5>
                  </div>
           </div>
           <div class="card">
                <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#RPURO"> 
                     <div class="card-body">
                         <h5 class="card-title">RECLUTAMIENTO PURO </h5>
                   </div>
            </div>
            <div class="card">
                <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#BÚSQUEDA"> 
                    <div class="card-body">
                        <h5 class="card-title">BÚSQUEDA DE TALENTO  </h5>
                    </div>
            </div>
            <div class="card">
                                        <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#SERVICIO"> 

                <div class="card-body">
                    <h5 class="card-title">SERVICIO DE DESARROLLO ORGANIZACIONAL </h5>
                </div>
            </div>
            <div class="card">
                                        <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#AUDITORIA"> 

                <div class="card-body">
                    <h5 class="card-title">AUDITORIA DE SISTEMAS DE GESTIÓN Y NORMATIVIDAD </h5>
                </div>
            </div>
            <div class="card">
                                        <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#ESTUDIOS"> 

                <div class="card-body">
                    <h5 class="card-title">ESTUDIOS DE VERIFICACIÓN DE DATOS </h5>
                </div>
            </div>
       </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="GESTIÓN" tabindex="-1" role="dialog" aria-labelledby="GESTIÓNLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="GESTIÓNLabel">GESTIÓN DE ATRACCIÓN DE TALENTO</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Servicio con una visión estratégica en la integración de soluciones de captación de personal altamente cualificado. </li> 
                </ul>
            </div>
          </div>
        </div>
</div>


<!-- Modal -->
<div class="modal fade" id="RECLUTAMIENTO " tabindex="-1" role="dialog" aria-labelledby="RECLUTAMIENTO Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="RECLUTAMIENTO Label">RECLUTAMIENTO MASIVO</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Externalización de la gestión de talento, donde MOBIRAMA actúa como reclutador para su empresa ya sea cubriendo en parte o en su totalidad los puestos de trabajo que tenga programados en su estructura organizacional.</li>
                </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="RPURO" tabindex="-1" role="dialog" aria-labelledby="RPUROLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="RPUROLabel">RECLUTAMIENTO PURO</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Las experiencias de años y los recursos más eficientes nos posicionan como una opción competitiva en el mercado para localizar a la persona que su organización busca para cubrir todo tipo de posiciones.</li>
                </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="BÚSQUEDA" tabindex="-1" role="dialog" aria-labelledby="BÚSQUEDALabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="BÚSQUEDALabel">BÚSQUEDA DE TALENTO </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Contamos con una división especializada en búsqueda de talento ejecutivo exclusivo para la selección de altos directivos o posiciones de corte especial.</li>
                </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="SERVICIO" tabindex="-1" role="dialog" aria-labelledby="SERVICIOLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SERVICIOLabel">SERVICIO DE DESARROLLO ORGANIZACIONAL</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Alineación estratégica</li>
                    <li>Coaching</li>
                    <li>Nine boxes</li>
                    <li>High potential</li>
                    <li>Plan de carrera y sucesión</li>
                </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="AUDITORIA" tabindex="-1" role="dialog" aria-labelledby="AUDITORIALabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="AUDITORIALabel">AUDITORIA DE SISTEMAS DE GESTIÓN Y NORMATIVIDAD</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ul>
                <li>Rediseño y mejora de procesos</li>
                <li>Preparación de documentación para auditorías de certificación</li>
                <li>Pre-auditorías de certificación</li>
                <li>Evaluación de las competencias del personal involucrado en sistemas de gestión y normatividad</li>
              </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ESTUDIOS" tabindex="-1" role="dialog" aria-labelledby="ESTUDIOSLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ESTUDIOSLabel">ESTUDIOS DE VERIFICACIÓN DE DATOS</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>Herramientas de alto valor para obtener información confidencial y verídica de los
                    candidatos permite reducir riesgos de una mala contratación y le da tranquilidad de saber quién lo acompaña diariamente en su empresa.
                    </p>
                    
            </div>
          </div>
        </div>
</div>

@stop