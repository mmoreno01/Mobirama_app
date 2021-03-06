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
        <div class="row serv-iconos">
            <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
                <img src="imagenes/payroll/bpo-mqquila.png" alt="BPO Maquila de Nómina" data-toggle="modal" data-target="#BPO">  
               <p>BPO Maquila de Nómina.</p>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <img src="imagenes/payroll/imp-hrp.png" alt="Implementación de HRP" data-toggle="modal" data-target="#Implementa">
                <p>Implementación de HRP.</p>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
                <img src="imagenes/payroll/Payroll-Forenstic.png" alt="Payroll Forensic" data-toggle="modal" data-target="#PayFore">
                <p>Payroll Forensic.</p>
            </div>
        </div>
        <div class="row serv-iconos">
           <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
               <img src="imagenes/payroll/taks-pay.png" alt="Consultoría en la Administración de Empresas"  data-toggle="modal" data-target="#TaxPay">
              <p>Tax Payroll Managment.</p>
           </div>
          
           <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
               <img src="imagenes/payroll/cfdi.png" alt="Gestión Contable"  data-toggle="modal" data-target="#CFDI">
               <p>CFDI implementación y operación.</p>
           </div>
           <div class="col-md-4">
              <img src="imagenes/capital_humano/talento.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Anomina">
              <p>Administración de Nómina </p>
          </div>
       </div>
    </div>
</section>

<!--Seccion del banner Magazine-->
<!-- <section class=" parallax my-5 animated fadeIn" id="banner" style="background-image: url(images/servicios/Payroll.jpg); background-position:center;background-repeat:no-repeat; background-size:cover;   background-attachment: fixed; ">
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
           
            <div class="col-md-4">
                <img src="imagenes/payroll/nominas.png" alt="BPO Maquila de Nómina" data-toggle="modal" data-target="#BPO">  
               <p>BPO Maquila de Nómina.</p>
            </div>
            <div class="col-md-4">
                <img src="imagenes/payroll/adnempresarial.png" alt="Implementación de HRP" data-toggle="modal" data-target="#Implementa">
                <p>Implementación de HRP.</p>
                </div>
            <div class="col-md-4">
                <img src="imagenes/payroll/talentoempresarial.png" alt="Payroll Forensic" data-toggle="modal" data-target="#PayFore">
                <p>Payroll Forensic.</p>
            </div>
            
           
        </div>
        <div class="row">
           
                <div class="col-md-4">
                    <img src="imagenes/payroll/reclutamientomasivo.png" alt="Consultoría en la Administración de Empresas"  data-toggle="modal" data-target="#TaxPay">
                   <p>Tax Payroll Managment.</p>
                </div>
                <div class="col-md-4">
                        <img src="imagenes/payroll/talentoejecutivo.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#PayAsesoria">
                    <p>Asesoría.</p>
                </div>
                <div class="col-md-4">
                    <img src="imagenes/payroll/verificacion.png" alt="Gestión Contable"  data-toggle="modal" data-target="#CFDI">
                    <p>CFDI implementación y operación.</p>
                </div>
            </div>
    </div>
</section> -->
<!--seccion de iconos-->

<!--Seccion de pop up-->

<!-- Modal -->
<div class="modal fade" id="BPO" tabindex="-1" role="dialog" aria-labelledby="BPOLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="BPOLabel">BPO Maquila de Nómina</h5>
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
<div class="modal fade" id="Implementa" tabindex="-1" role="dialog" aria-labelledby="ImplementaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ImplementaLabel">BPO Maquila de nomina implementacion de HRP</h5>
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
<div class="modal fade" id="PayFore" tabindex="-1" role="dialog" aria-labelledby="PayForeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="PayForeLabel">Payroll Forensic</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>
                      Ofrecemos los servicios de blindaje a los sistemas de nóminas, a través del uso de métodos de Auditoría Forense, lo cual permite a las empresas prevenir y detectar fraudes en la administración de estos sistemas, usando para ello una metodología propia que combina las normas de auditoría, reglas ACFE y mejores prácticas de la industria, así como el aprovechamiento de fuentes internas y externas de información.
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="TaxPay" tabindex="-1" role="dialog" aria-labelledby="TaxPayLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="TaxPayLabel">Tax Payroll Managment</h5>
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
{{-- <div class="modal fade" id="PayAsesoria" tabindex="-1" role="dialog" aria-labelledby="PayAsesoriaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="PayAsesoriaLabel">Asesoría</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <ul>
                            <li>IMSS </li>
                            <li>Grados de riesgos de trabajo, escalación de riesgos de trabajo, auditoría de pago de cuotas obreras patronales.</li>
                            <li>Stock Options</li>
                            <li>IMSS </li>
                            <li>Asesoría en la implementación de sistemas de prestaciones por pago de acciones (Stock Options), así como esquemas de blindaje fiscal de los mismos</li>
                    </ul>
            </div>
          </div>
        </div>
      </div> --}}
      
<!-- Modal -->
<div class="modal fade" id="CFDI" tabindex="-1" role="dialog" aria-labelledby="CFDILabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="CFDILabel">CFDI implementación y operación</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <ul>
                            <li>Construcción de XML y timbrado de recibos de nómina conforme a los catálogos de información del SAT (versión 3.3 y sucedáneas).</li>        
                    </ul>
            </div>
          </div>
        </div>
      </div>

  <!-- Modal -->
<div class="modal fade" id="Anomina" tabindex="-1" role="dialog" aria-labelledby="AnominaLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AnominaLabel">Administración de Nómina </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <ul>
              <li>Minimice los riesgos laborales hacia tu empresa, optimizando costos administrativos y financieros además de dar firme cumplimiento con las legislaciones laborales, financieras y hacendarias; en especial cubriendo a nuestros clientes y empresas filiales en los supuestos relacionados en el artículo 69 B del Código Fiscal de la Federación.</li> 
              <li>  BLINDAJE EMPLEADO POR EMPLEADO: los empleados contratados recibirán comprobante de sus remuneraciones a fin de no caer en los supuestos de subordinación dispuestos en distintas legislaciones fiscales y de seguridad social.</li>
              <li>  PAGO : Con los montos de sus cuentas bancarias, se lleva a cabo la dispersión a los empleados definidos en el SLA.</li>

          </ul>
      </div>
    </div>
  </div>
</div>


      
@stop