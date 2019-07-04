@extends('layout')  

@section('content')
<!-- imagen principal -->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -30.0" style="background-image: url('imagenes/Master-Servicios-assets/Nosotros.jpg');">
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
                                <p>Durante los más de 25 años de trayectoria hemos prestado servicios profesionales a más de 3 mil  industrias de diversos sectores económicos; en cada relación se ha implementado un estricto protocolo técnico y una metodología precisa para el logro de los objetivos de nuestros clientes, realizamos análisis para el desarrollo y ejecución de planes de negocios específicos en tiempo y forma, estableciendo acciones y soluciones personalizadas en relación con la expectativa de metas, la finalidad es garantizar la mejora continua y la consolidación de la empresa en su ámbito de competencia comercial.</p>
                                <p>Esta amplia experiencia nos ha permitido apoyar y acompañar a  clientes y socios  en el diagnóstico de problemáticas y riesgos e implementación de planes de contención y de mejora, sirviendo nuestras acciones para planificar mediante las conclusiones del dictamen técnico-profesional la estrategia para mitigar las contingencias y perfilar la empresa para elevar su competitividad. </p>
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