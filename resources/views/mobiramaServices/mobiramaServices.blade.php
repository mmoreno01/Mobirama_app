@extends('layout')

@section('content')
<div class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('imagenes/m-service/bg-ms.jpg');">
    <!-- <h1 >Banca de Inversión</h1> -->
    <img class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 100,0" src="imagenes/home-icons/mservice.png" alt="">
</div>

<!--section nosotros-->
<section id="section_nosotros">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="col-lg-12 about-us-intro">
                    <h2>Payroll Service</h2>
                    <p>Contamos con un equipo multidisciplinario de especialistas encargados de detectar y analizar las necesidades de las organizaciones en materia de administración integral de recursos humanos. Hemos innovado el concepto de gestión de personal al incluir una serie de soluciones que facilitan los procesos operativos internos, permitiendo a las empresas enfocarse en su Core Business con un alto grado de confiabilidad</p>
                </div>
                <div class="row content-icons">
                    <div class="col-md-6">
                        <div class="content-layout">
                            <div class="content-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <!--end icon-->
                        <div class="content-text">
                            <h5>Mejora el aprovechamiento del capital humano </h5>
                            <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit</p> -->
                        </div>
                        <!--end text-->
                        </div>
                        <!--end item-->
                    </div>
                    <div class="col-md-6">
                        <div class="content-layout">
                            <div class="content-icon">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <!--end icon-->
                            <div class="content-text">
                                <h5>Reduce costos y tiempos de operación</h5>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit</p> -->
                            </div>
                            <!--end text-->
                        </div>
                        <!--end item-->
                    </div>
                    <div class="col-md-6">
                        <div class="content-layout">
                            <div class="content-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <!--end icon-->
                            <div class="content-text">
                                <h5>Asegura la confidencialidad de la información y mejora el control interno</h5>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit</p> -->
                            </div>
                            <!--end text-->
                        </div>
                        <!--end item-->
                    </div>
                    <div class="col-md-6">
                        <div class="content-layout">
                            <div class="content-icon">
                                <i class="fas fa-toolbox"></i>
                            </div>
                            <!--end icon-->
                            <div class="content-text">
                                <h5>Restringe riesgos por incumplimiento fiscal</h5>
                                <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit</p> -->
                            </div>
                            <!--end text-->
                        </div>
                        <!--end item-->
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <figure class="about-us-img wow fadeInLeft about-us-stick-bottom" style="visibility: visible;">
                        <img src="imagenes/m-service/about_person_bg.jpg" alt="about_person_bg">
                </figure>
            </div>
        </div>
    </div>
</section>
<!--fin section nosotros-->

<!--carousel slider services-->
<section id="carousel_services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme  nav nav-tabs content-icon"  id="nav-tab" role="tablist" style="background: url(imagenes/m-service/bg-nodo.jpg); background-position: center center;background-repeat: no-repeat;background-attachment: fixed; background-size: cover;">
                            <div>
                                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                    <i class="fab fa-wpforms"></i>
                                    <P >BPO Maquila de Nómina</P>
                                </a>
                            </div>
                            <div>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                    <i class="fas fa-briefcase"></i>
                                    <P>Implementación de HRP</P>
                                </a>
                            </div>
                            <div>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                    <P>Payroll Forensic</P>
                                </a>
                            </div>
                            <div>
                                <a class="nav-item nav-link" id="nav-manager-tab" data-toggle="tab" href="#nav-manager" role="tab" aria-controls="nav-manager" aria-selected="false">
                                    <i class="fas fa-user-check"></i>
                                    <P>Tax Payroll Managment</P>
                                </a>
                            </div>
                            <div>
                                <a class="nav-item nav-link" id="nav-asesor-tab" data-toggle="tab" href="#nav-asesor" role="tab" aria-controls="nav-asesor" aria-selected="false">
                                    <i class="fas fa-users"></i>
                                    <P>Asesoría</P>
                                </a>
                            </div>
                            <div>
                                <a class="nav-item nav-link" id="nav-cdfi-tab" data-toggle="tab" href="#nav-cdfi" role="tab" aria-controls="nav-cdfi" aria-selected="false">
                                    <i class="fas fa-clipboard-list"></i>
                                    <P>CFDI implementación y operación</P>                                
                                </a>
                            </div>

                </div>
                         <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                      <h2> BPO Maquila de Nómina</h2>
                                     <p><span>servicio</span></p>  
                                        Mobirama Service– Payroll Services asume el proceso de nómina de su empresa a través de un sólido esquema que cubre todos los aspectos de esta disciplina, basados en nuestra metodología certificada bajo la norma ISO 9001 – 2015
                                        Ayudamos a nuestros clientes a optimizar sus costos, brindando un servicio integral y estabilidad en su gestión, haciendo un traje a la medida de sus necesidades y elevando su productividad
                                        Nosotros asumimos la responsabilidad del proceso contratado, esta puede incluir la adquisición de una nueva tecnología con valor agregado
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                       <h2>Implementación de HRP</h2> 
                                       <p><span>servicio</span></p>  
                                        Desarrollamos y parametrizamos diversos sistemas de nómina “state of the art” dependiendo de las características de su negocio
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <h2>Payroll Forensic</h2>
                                        <p><span>servicio</span></p>  
                                        Mobirama Service – Payroll Services es la única empresa en México que ofrece los servicios de blindaje a los sistemas de nóminas, a través del uso de métodos de Auditoría Forense, lo cual permite a las empresas prevenir y detectar fraudes en la administración de estos sistemas, usando para ello una metodología propia que combina las normas de auditoria, reglas ACFE y mejores prácticas de la industria, así como el aprovechamiento de fuentes internas y externas de información.
                                </div>
                                <div class="tab-pane fade" id="nav-manager" role="tabpanel" aria-labelledby="nav-manager-tab">
                                       <h2>Tax Payroll Managment</h2>
                                       <p><span>servicio</span></p>   
                                        Sin duda el cumplimiento de las regulaciones en materia de seguridad social (en todas sus ramas), Cuentas Individuales (Retiro y Cesantía), INFONAVIT, Impuestos Estatales, CFDI 3.3, con sus continuos cambios, requieren de equipos profesionales y altamente capacitados, así como sistemas HRP de vanguardia. Atención a autoridades y en su caso, el litigio en estas materias están incluidas en esta práctica
                                </div>
                                <div class="tab-pane fade" id="nav-asesor" role="tabpanel" aria-labelledby="nav-asesor-tab">
                                      <h2> Asesoría</h2> 
                                      <p><span>servicio</span></p>   
                                      <ul>
                                          <li>IMSS</li>
                                          <li>Grados de riesgos de trabajo, escalación de riesgos de trabajo, auditoría de pago de cuotas obreras patronales.</li>
                                          <li>Stock Options</li>
                                          <li>Asesoría en la implementación de sistemas de prestaciones por pago de acciones (Stock Options), así como esquemas de blindaje fiscal de los mismos</li>
                                      </ul>
                                        
                                </div>
                                <div class="tab-pane fade" id="nav-cdfi" role="tabpanel" aria-labelledby="nav-cdfi-tab">
                                        <h2>CFDI implementación y operación</h2> 
                                        <p><span>servicio</span></p>   
                                        Construcción de XML y timbrado de recibos de nómina conforme a los catálogos de información del SAT (versión 3.3 y sucedáneas)  
                                </div>
                        </div> 
            </div>
        </div>
    </div>
</section>
<!-- End carousel slider services-->

<!-- section solutions  -->
<section id="section-solutions">
    <div class="container">
        <div class="row">
            <div class="col-12 content_title">
                <h2>Soluciones Tecnologicas</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="imagenes/solutions_img/fortia.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="imagenes/solutions_img/legadmi.png" alt="">
            </div>
            <div class="col-md-4">
                <img src="imagenes/solutions_img/softland.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End section solutions  -->

<!-- section exit case -->
<section id="section_ExitCase" style="background: url(imagenes/m-service/city.jpg); background-position: center center;background-repeat: no-repeat;background-attachment: initial;position: relative; background-size: cover;">
    <div class="bg-overlay"></div>
            <h2>casos de exito</h2>
     <div  class= "container  owl-carousel owl-theme  owl-loaded" >
            <div  class="item wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2s">
               <img src="imagenes/solutions_img/bticho.png" alt="">
            </div>
            <div class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.1s">
                <img src="imagenes/solutions_img/pawa.png" alt="">
            </div>
             <div class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.2s">
                     <img src="imagenes/solutions_img/pinsa.jpg" alt="">
            </div>
             <div class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.3s"> 
                     <img src="imagenes/solutions_img/pyg.png" alt="">
            </div>
             <div class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.4s"> 
                     <img src="imagenes/solutions_img/santos.png" alt="">
            </div>
             <div class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.5s"> 
                <img src="imagenes/home-icons/Fiscal.png" alt="">
            </div>
             <div class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2s"> 
                <img src="imagenes/home-icons/Doc-Estaciones.png" alt="">
            </div>	
        </div>
</section>
<!-- End section exit case -->



@stop

