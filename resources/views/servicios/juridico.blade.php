@extends('layout')

@section('content')
<!--imagen principal-->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s"  uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Juridico.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 90,0">Jurídico Fiscal</h1>
</div>
<!--fin imagen principal-->
      
<section id="content-txt">
         <div class="container">
            <div class="row">
               <div class="col-12 text-left wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s">
                  <p>Analizamos las diversas disposiciones fiscales nacionales e internacionales, con objeto de que nuestros clientes cuenten con certeza jurídica para optimizar las cargas tributarias que les correspondan, 
                    así como la prevención de la doble tributación internacional, atendiendo las disposiciones fiscales vigentes.</p>
                  <!--<p>Tenemos el compromiso de brindarle un servicio de calidad mediante los siguientes servicios:</p>-->
                  
                 <a href="/#content_services">Más Servicios</a> 
               </div>
            </div>
            <div class="card-columns">
                  <div class="card" data-wow-duration="0.5s" data-wow-delay="0.1s">
                      <img class="card-img-top"   src="imagenes/servicios/services-06.jpg" alt="Consultoría en la Administración de Empresas" data-toggle="modal" data-target="#PROCEDIMIENTOS">
                      <div class="card-body">
                          <h5>PROCEDIMIENTOS ADMINISTRATIVOS LITIGIO CONTENCIOSO EN MATERIA FISCAL</h5>
                      </div>
                  </div>
                  <div class="card" data-wow-duration="0.5s" data-wow-delay="0.4s">
                   <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#PROCESO">
                      <div class="card-body">
                          <h5>PROCESO DE ATENCIÓN DEL ACTO DE LA AUTORIDAD FISCAL</h5>
                      </div>
                  </div>
                  <div class="card" data-wow-duration="0.5s" data-wow-delay="0.6s">
                      <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Gestión Contable" data-toggle="modal" data-target="#PREVENCIÓN">
                      <div class="card-body">
                          <h5>COMPLIANCE PARA LA PREVENCIÓN CONTRA LA INTERPRETACIÓN DEL ARTÍCULO 69-B DEL CÓDIGO FISCAL DE LA FEDERACIÓN</h5>
                      </div>
                  </div>
                  <div class="card" data-wow-duration="0.5s" data-wow-delay="0.9s">
                      <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Control de Constitucionalidad" data-toggle="modal" data-target="#MATERIA"> 
                        <div class="card-body">
                            <h5>COMPLIANCE EN MATERIA DE PREVENCIÓN DE OPERACIONES VULNERABLES</h5>
                        </div>
                    </div>
                    <div class="card" data-wow-duration="0.5s" data-wow-delay="0.9s">
                        <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#CONSULTORÍA"> 
                          <div class="card-body">
                              <h5>CONSULTORÍA FISCAL</h5>
                          </div>
                    </div>
                    <div class="card" data-wow-duration="0.5s" data-wow-delay="0.9s">
                      <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#CONTRA"> 
                        <div class="card-body">
                            <h5>AMPARO CONTRA LEYES</h5>
                        </div>
                    </div>
                    <div class="card" data-wow-duration="0.5s" data-wow-delay="0.9s">
                        <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#DISEÑO"> 
                          <div class="card-body">
                              <h5>DISEÑO Y ESTRUCTURA EN FUSIÓN Y ESCISIÓN DE EMPRESAS</h5>
                          </div>
                    </div>
                    <div class="card" data-wow-duration="0.5s" data-wow-delay="0.9s">
                        <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#ATENCIÓN"> 
                        <div class="card-body">
                            <h5> ATENCIÓN Y ACOMPAÑAMIENTO PARA LA ELABORACIÓN DE ACUERDOS CONCLUSIVOS ENTRE PRODECON</h5>
                        </div>
                    </div>
                    <div class="card"data-wow-duration="0.5s" data-wow-delay="0.9s">
                        <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#CORPORATIVO"> 
                        <div class="card-body">
                            <h5>CUMPLIMIENTO CORPORATIVO EN MATERIA DE PREVENCIÓN DEL DELITO</h5>
                        </div>
                    </div>
                    <div class="card"data-wow-duration="0.5s" data-wow-delay="0.9s">
                        <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#CUMPLIMIENTO"> 
                          <div class="card-body">
                              <h5>CUMPLIMIENTO CORPORATIVO EN MATERIA DE PREVENCIÓN DE ACTOS DE CORRUPCIÓN</h5>
                          </div>
                    </div>
                    <div class="card"data-wow-duration="0.5s" data-wow-delay="0.9s">
                        <img class="card-img-top"  src="imagenes/servicios/services-06.jpg" alt="Penal" data-toggle="modal" data-target="#TRANSACCIONES"> 
                          <div class="card-body">
                              <h5>TRANSACCIONES Y DERECHO FINANCIERO</h5>
                          </div>
                    </div>
              </div>
         </div>
      </section>
<!--Pop up de iconos -->

 <!-- Modal -->
 <div class="modal fade" id="PROCEDIMIENTOS" tabindex="-1" role="dialog" aria-labelledby="PROCEDIMIENTOSLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="PROCEDIMIENTOSLabel">Procedimientos administrativos Litigiio Contentioso en materia fiscal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Ofrecemos el análisis, desarrollo e implementación de estrategias de defensa en contra de actos administrativos, provisionales o definitivos, 
                incluyendo la que resulte en contra de resoluciones en donde se determinen créditos fiscales a las empresas. Es importante destacar que, 
                las estrategias de defensa siempre tendrán como prioridad impugnar las cuestiones de fondo de las resoluciones impugnadas.</p>

              <ul>
                    <li>Defensa fiscal en contra de actos o resoluciones de autoridades fiscales federales y en materia de seguridad social</li>
                    <li>Recursos de revocación (SAT)</li>
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
  <div class="modal fade" id="PROCESO" tabindex="-1" role="dialog" aria-labelledby="PROCESOLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="PROCESOLabel">PROCESO DE ATENCIÓN DEL ACTO DE LA AUTORIDAD FISCAL</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Nuestros abogados cuentan con amplia experiencia para impugnar disposiciones de carácter general en materia administrativa, 
                bien sea a través del juicio de amparo indirecto o a través del juicio de amparo directo (en donde las cuestiones de constitucionalidad se hacen valer en los conceptos de violación).</p>
                <ul>
                    <li>1. ASISTENCIA EN LA AUDITORÍA</li>
                      <p>Si la autoridad fiscal inicia el ejercicio de sus facultades de comprobación con el objeto de determinar un crédito fiscal, nuestro equipo de especialistas atenderá en coordinación con el área contable de la empresa dichos procedimientos con el objeto de evitar irregularidades o violaciones que incidan directamente en el resultado de la misma.</p>
                    <li>2. ATENCIÓN Y ACOMPAÑAMIENTO PARA LA ELABORACIÓN DE ACUERDOS CONCLUSIVOS ENTRE PRODECON</li>
                      <p>Evitando así la determinación de un crédito fiscal.</p>
                    <li>3. LITIGIO FISCAL</li>
                      <p>Una vez se haya determinado la situación jurídica de la empresa y se le finque un crédito fiscal, se desarrolla la dirección idónea para combatirlo a través de los medios de defensa que contempla nuestra legislación (juicios y recursos).</p>
                    <li>4. FISCAL Y ADMINISTRATIVO</li>
                      <p>Nuestros abogados cuentan con amplia experiencia para impugnar disposiciones de carácter general en materia administrativa, bien sea a través del juicio de amparo indirecto o a través del juicio de amparo directo (en donde las cuestiones de constitucionalidad se hacen valer en los conceptos de violación).</p>
                    <li>5. ATENCIÓN DE PROCEDIMIENTO ADMINISTRACIÓN DE EJECUCIÓN</li>
                      <p>Atención inmediata con la finalidad de evitar que la autoridad levante embargo sobre bienes de la empresa</p>
                    <li>6. DEVOLUCIÓN DE IMPUESTOS</li>
                     <p>Acompañamiento y defensa legal para la obtención de una resolución favorable que autorice la devolución de impuestos.</p>
                    <li>7. OFRECIMIENTO DE GARANTÍA</li>
                      <p>Para acreditar y solicitar la suspensión del procedimiento administrativo de ejecución, nuestro equipo en colaboración con el cliente realiza el ofrecimiento de garantía a través de las distintas modalidades que establece nuestra legislación.</p>
                    <li>8. DESINMOVILIZACIÓN DE CUENTAS BANCARIAS</li>
                      <p>A través de la interposición de los medios de defensa y seguimiento ante la Comisión Nacional Bancaria de Valores para la obtención de la desinmovilización de las cuentas</p>
                </ul>
            </div>
          </div>
        </div>
      </div>

 <!-- Modal -->
 <div class="modal fade" id="PREVENCIÓN" tabindex="-1" role="dialog" aria-labelledby="PREVENCIÓNLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="PREVENCIÓNLabel">COMPLIANCE PARA LA PREVENCIÓN CONTRA LA INTERPRETACIÓN DEL ARTÍCULO 69-B DEL CÓDIGO FISCAL DE LA FEDERACIÓN</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Ofrecemos un conjunto de acciones para contribuyentes sujetos al procedimiento de presunción de operaciones, que tienen como finalidad que los actos jurídicos sujetos a revisión causen efectos fiscales y se desvirtúen las presunciones. Dichas acciones comprenden una protección integral al también integrar una defensa de los terceros relacionados con los contribuyentes revisados.</li>
               </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="MATERIA" tabindex="-1" role="dialog" aria-labelledby="MATERIALabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="MATERIALabel">COMPLIANCE EN MATERIA DE PREVENCIÓN DE OPERACIONES VULNERABLES</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ul>
                    <li>Al entrar  en vigor  la  Ley  Federal  para la Prevención e Identificación de Operaciones con Recursos de Procedencia Ilícita, se amplían las facultades del Servicio de Administración Tributaria, al ahora contemplar procedimientos especiales para identificar este tipo de operaciones, por lo que nuestro equipo de especialistas implementa estrategias tanto preventivas como contenciosas en contra de dichos actos.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
       <!-- Modal -->
       <div class="modal fade" id="CONSULTORÍA" tabindex="-1" role="dialog" aria-labelledby="CONSULTORÍALabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="CONSULTORÍALabel">CONSULTORÍA FISCAL</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
              <ul>
                <li>Siendo la materia fiscal tan dinámica, nuestro equipo de especialistas está en constante estudio e investigación para ofrecer a los clientes de manera oportuna las novedades fiscales que le beneficien a su línea de negocios. Brindando Atención de los requerimientos ante autoridades administrativas de los tres órdenes de gobierno.</li>
                
              </ul>
              
            </div>
          </div>
        </div>
      </div>

       <!-- Modal -->
       <div class="modal fade" id="CONTRA" tabindex="-1" role="dialog" aria-labelledby="CONTRALabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="CONTRALabel">AMPARO CONTRA LEYES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <ul>
                  <li>Presentación de juicio en contra de leyes que tengan como finalidad restringir los derechos constitucionales de los contribuyentes, con el objeto de desincorporarlo de su campo de aplicación; como ejemplo de este servicio tenemos el amparo en contra de los artículos que contienen la implementación del sistema de contabilidad electrónica.</li>
                  
                </ul>
                
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
       <div class="modal fade" id="DISEÑO" tabindex="-1" role="dialog" aria-labelledby="DISEÑOLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="DISEÑOLabel">DISEÑO Y ESTRUCTURA EN FUSIÓN Y ESCISIÓN DE EMPRESAS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <ul>
                  <li>Ofrecemos un conjunto de acciones para las empresas que tienen como finalidad celebrar actos jurídicos corporativos haciendo un análisis integral de las ventajas y desventajas que implica los cambios corporativos.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

         <!-- Modal -->
       <div class="modal fade" id="ATENCIÓN" tabindex="-1" role="dialog" aria-labelledby="ATENCIÓNLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ATENCIÓNLabel"> ATENCIÓN Y ACOMPAÑAMIENTO PARA LA ELABORACIÓN DE ACUERDOS CONCLUSIVOS ENTRE PRODECON</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <ul>
                  <li> Evitando así la determinación de un crédito fiscal.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
           <!-- Modal -->
       <div class="modal fade" id="CORPORATIVO" tabindex="-1" role="dialog" aria-labelledby="CORPORATIVOLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="CORPORATIVOLabel">CUMPLIMIENTO CORPORATIVO EN MATERIA DE PREVENCIÓN DEL DELITO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <ul>
                  <li> Hemos desarrollado una metodología que nos permite identificar cuáles son los riesgos en la comisión de delitos al interior de las empresas (personas jurídicas), atendiendo a los diversos procesos de negocio de nuestros clientes.</li>
                  <li>De la misma forma, contamos con un sistema de gestión o de cumplimiento corporativo, que permite a nuestros clientes reducir o incluso eliminar los riesgos de ser sancionados por la autoridad penal.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

            
           <!-- Modal -->
       <div class="modal fade" id="CUMPLIMIENTO" tabindex="-1" role="dialog" aria-labelledby="CUMPLIMIENTOLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="CUMPLIMIENTOLabel">CUMPLIMIENTO CORPORATIVO EN MATERIA DE PREVENCIÓN DE ACTOS DE CORRUPCIÓN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <ul>
                  <li>Hemos desarrollado una metodología que permite asesorar a nuestros clientes para el debido cumplimiento de las obligaciones a cargo de las empresas de conformidad con el Sistema Nacional Anticorrupción, a través de un sistema de gestión o cumplimiento corporativo efectivo</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

             <!-- Modal -->
       <div class="modal fade" id="TRANSACCIONES" tabindex="-1" role="dialog" aria-labelledby="TRANSACCIONESLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="TRANSACCIONESLabel">TRANSACCIONES Y DERECHO FINANCIERO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <ul>
                  <li>Llevamos a cabo análisis financieros desde un punto de vista fiscal de los diversos tipos de financiamientos que obtengan u otorguen nuestros clientes, bien sean en nuestro país o en el extranjero. También participamos en operaciones de financiamiento a través de mercados bursátiles y bursatilización de activos.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
<!--Fin de Pop up de iconos -->
@stop