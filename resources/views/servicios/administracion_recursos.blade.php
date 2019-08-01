@extends('layout')

@section('content')
<!--imagen principal-->
<div class="parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/CapitalHumano.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 100,0">ADMINISTRACIÓN DE RECURSOS</h1>
</div>
<!--fin de imagen principal-->


<section id="content-txt">
      <div class="container">
        <div class="row">
            <div class="col-12 text-left wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s">
                    <p>Minimizamos los riesgos laborales hacia tu empresa, optimizando costos administrativos y financieros además de dar firme cumplimiento con la legislación laboral, financiera y hacendarias; es especial cubriendo a nuestro cliente y empresas filiales en lo relacionado al artículo 69 B del Código Fiscal de la Federación.</p>
                    <p>Contamos con un grupo de especialistas que ofrecen un servicio integral de cualquier tipo de Maquila de Nómina, así como la elaboración de los formatos necesarios para el pago de las contribuciones que dependan de este servicio (ISN – ISR por Sueldos, cargas sociales). Este servicio incluye:</p>
                    <ul>
                        <li> Procesamiento correcto de Nómina</li>
                        <li> Altas y Bajas de personal</li>
                        <li> Movimientos ante el IMSS.</li>
                        <li> Captura de Incidencias.</li>
                        <li> Calculo de Percepciones y Retenciones</li>
                    </ul>            
              <a href="/#content_services">Más Servicios</a> 
            </div>
        </div>
        <div class="card-columns">
                <div class="card">
                        <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#OUTSOURCING"> 
                        <div class="card-body">
                          <h5 class="card-title">OUTSOURCING DE SEGURIDAD SOCIAL</h5>
                        
                        </div>
                      </div>
       </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="OUTSOURCING" tabindex="-1" role="dialog" aria-labelledby="OUTSOURCINGLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="OUTSOURCINGLabel">OUTSOURCING DE SEGURIDAD SOCIAL</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li> Altas Patronales ante el IMSS</li>
                    <li>Altas, Bajas y Modificaciones de sus Trabajadores ante el IMSS e INFONAVIT</li>
                    <li> Archivo de Pago Oportunos del Seguro Social e INFONAVIT</li>
                    <li> Confrontas de SUA</li>
                    <li> Elaboración de Variables Bimestrales para Salarios Mixtos</li>
                    <li> Pago y Recalculo de Diferencias de Créditos Fiscales</li>
                    <li> Asesoría sobre de Créditos Fiscales y Requerimientos hechos por el IMSS e INFONAVIT</li>
                    <li> Cálculo de Prima del Seguro de Riesgo de Trabajo</li>
                </ul>
            </div>
          </div>
        </div>
</div>



@stop