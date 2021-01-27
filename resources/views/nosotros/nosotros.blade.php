@extends('layout')  

@section('content')
<!-- imagen principal -->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -30.0" style="background-image: url('imagenes/Master-Servicios-assets/Nosotros.webp');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 10,0">Nosotros</h1>
</div>
<!-- fin de la imagen principal -->

<!--seection-about-us-->
<section id="content-nosotros" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.5s">
        <div class="container">
                <div class="row">
                    <div class="col-md-6 content-text-aboutUs" >
                        <div class="col-12 title-about-us">
                            <h1 class="">¿Quiénes somos? </h1>
                        </div>
                        <article class="text-inicial">
                                <p>Somos una consultoría integral de negocios, nuestra práctica profesional con más de 25 años en el mercado de servicios, nos posiciona como un socio estratégico en el acompañamiento empresarial. La especialización de nuestros equipos de trabajo solventa necesidades en materia Financiera, Fiscal, Jurídica-Legal y Laboral, entre otras áreas de servicio.</p>
                                <p>“Nuestra experiencia <span class="font-weight-bold">Internacional</span> y capacidades <span class="font-weight-bold">multidisciplinarias</span>, así como nuestras <span class="font-weight-bold">alianzas estratégicas</span> nos permiten desarrollar proyectos con la seguridad de optimizar los recursos de <span class="font-weight-bold">nuestros clientes</span>” </p>
                                <p>Contamos con un equipo de Contadores Públicos y Abogados con experiencia en el sector público y privado, asociados al Colegio de Contadores Públicos de México, mismos que se han desempeñado en funciones de finanzas, auditoría, contenciosas, interpretando disposiciones jurídicas y financieras, a empresas locales y trasnacionales.</p>
                        </article>
                    </div>
                    <div class="col-md-6 content-img-aboutus  d-none d-sm-block d-print-block">
                        <img src="imagenes/nosotros/somos.jpg" alt="">
                    </div>
                </div>
            </div>
</section>
<!--end section-about-us-->

<!--section-slogan-->
<section id="section-bgimg-about" class="wow fadeInDown"  data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="content-img parallax"  style="background-image: url('imagenes/nosotros/abouts-us.jpg'); background-position: center center; background-origin: cover; background-repeat: no-repeat; background-size: cover;">
        <div class="overlay"></div>
    </div>
</section>
<!-- Siempre te ayudaremos a hacer crecer tu negocio
Nuestra misión es brindarle la más alta calidad de servicio y solución -->

<section id="second-text">
    <div class="container">
        <div class="row">
            <div class="col-12">
             <article class="content-secondtxt wow fadeIn"  data-wow-duration="1s" data-wow-delay="0.3s"> 
                    <p>Nuestra experiencia nos ha permitido apoyar y acompañar a nuestros clientes en el diagnóstico de problemáticas y riesgos e implementación de planes de contención y de mejora, sirviendo nuestras acciones para planificar mediante las conclusiones del dictamen técnico-profesional la estrategia para mitigar las contingencias y perfilar la empresa para elevar su competitividad.</p>
             </article>
            </div>
        </div>
    </div>
</section>

<!--section-slogan
 <section id="our-clients">   
    <div class="container">
        <div class="row">
            <div class="col-12 content-title-clients">
                <h1>Nuestros Clientes</h1>
            </div>
            <div class="owl-carousel  owl-loaded">
                <div>
                    <img src="imagenes/nosotros/clients/logo1.jpg" alt="">
                </div>
                <div>
                        <img src="imagenes/nosotros/clients/logo2.jpg" alt="">

                </div>
                <div>
                        <img src="imagenes/nosotros/clients/logo1.jpg" alt="">

                </div>
                <div>
                        <img src="imagenes/nosotros/clients/logo2.jpg" alt="">

                </div>
                <div>
                        <img src="imagenes/nosotros/clients/logo1.jpg" alt="">

                </div>
                <div>
                        <img src="imagenes/nosotros/clients/logo2.jpg" alt="">

                </div>
            </div>
        </div>
    </div>
</section> -->
@stop