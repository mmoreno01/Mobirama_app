@extends('layout')

@section('content')
<!--imagen principal-->
<div class="parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Payroll.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 50,0">Payroll Service</h1>
</div>
<!--fi imagen principal-->

<section id="content-txt">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left">
              <p>Contamos con un equipo multidisciplinario de especialistas encargados de detectar y analizar las necesidades de las organizaciones en materia de administración integral de recursos humanos. Hemos innovado el concepto de gestión de personal al incluir una serie de soluciones que facilitan los procesos operativos internos, permitiendo a las empresas enfocarse en su Core Business con un alto grado de confiabilidad</p>
              <ul>
                  <li>Mejora el aprovechamiento del capital humano</li>
                  <li>Reduce costos y tiempos de operación</li>
                  <li>Asegura la confidencialidad de la información y mejora el control interno</li>
                  <li>Restringe riesgos por incumplimiento fiscal</li>
              </ul>
              <a href="home#content_services">Más Servicios</a> 
            </div>
        </div>
        <div class="row serv-iconos">
            <div class="col-md-4">
                <img src="imagenes/payroll/bpo-mqquila.png" alt="BPO Maquila de Nómina" data-toggle="modal" data-target="#BPO">  
               <p>BPO Maquila de Nómina.</p>
            </div>
            <div class="col-md-4">
                <img src="imagenes/payroll/imp-hrp.png" alt="Implementación de HRP" data-toggle="modal" data-target="#Implementa">
                <p>Implementación de HRP.</p>
                </div>
            <div class="col-md-4">
                <img src="imagenes/payroll/Payroll-Forenstic.png" alt="Payroll Forensic" data-toggle="modal" data-target="#PayFore">
                <p>Payroll Forensic.</p>
            </div>
        </div>
        <div class="row serv-iconos">
           <div class="col-md-4">
               <img src="imagenes/payroll/taks-pay.png" alt="Consultoría en la Administración de Empresas"  data-toggle="modal" data-target="#TaxPay">
              <p>Tax Payroll Managment.</p>
           </div>
           <div class="col-md-4">
                   <img src="imagenes/payroll/asesorias.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#PayAsesoria">
               <p>Asesoría.</p>
           </div>
           <div class="col-md-4">
               <img src="imagenes/payroll/cfdi.png" alt="Gestión Contable"  data-toggle="modal" data-target="#CFDI">
               <p>CFDI implementación y operación.</p>
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
                    <li>Payroll Services asume el proceso de nómina de su empresa a través de un sólido esquema que cubre todos los aspectos de esta disciplina, basados en nuestra metodología certificada bajo la norma ISO 9001 – 2015</li>
                    <li>Ayudamos a nuestros clientes a optimizar sus costos, brindando un servicio integral y estabilidad en su gestión, haciendo un traje a la medida de sus necesidades y elevando su productividad</li>
                    <li>Nosotros asumimos la responsabilidad del proceso contratado, esta puede incluir la adquisición de una nueva tecnología con valor agregado</li>
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
              <h5 class="modal-title" id="ImplementaLabel">Implementación de HRP</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Desarrollamos y parametrizamos diversos sistemas de nómina “state of the art” dependiendo de las características de su negocio</li> 
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
                            Payroll Services es la única empresa en México que ofrece los servicios de blindaje a los sistemas de nóminas, a través del uso de métodos de Auditoría Forense, lo cual permite a las empresas prevenir y detectar fraudes en la administración de estos sistemas, usando para ello una metodología propia que combina las normas de auditoria, reglas ACFE y mejores prácticas de la industria, 
                            así como el aprovechamiento de fuentes internas y externas de información.

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
                            Sin duda el cumplimiento de las regulaciones en materia de seguridad social (en todas sus ramas), Cuentas Individuales (Retiro y Cesantía), INFONAVIT, Impuestos Estatales, CFDI 3.3, con sus continuos cambios, requieren de equipos profesionales y altamente capacitados, así como sistemas HRP de vanguardia.
                             Atención a autoridades y en su caso, el litigio en estas materias están incluidas en esta práctica
                    </li>
                </ul> 
            </div>
          </div>
        </div>
      </div>

 <!-- Modal -->
<div class="modal fade" id="PayAsesoria" tabindex="-1" role="dialog" aria-labelledby="PayAsesoriaLabel" aria-hidden="true">
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
      </div>
      
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
                            <li>ADN empresarial (due-diligence)</li>        
                    </ul>
            </div>
          </div>
        </div>
      </div>
      
@stop