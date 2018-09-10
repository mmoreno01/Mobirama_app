@extends('layout')  

@section('content')
<!-- imagen principal -->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('imagenes/bg_header/nosotros.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 100,0">Nosotros</h1>
</div>
<!-- fin de la imagen principal -->

<!--seection-about-us-->
<section id="content-nosotros">
        <div class="container">
                <div class="row">
                    <div class="col-md-6 content-text-aboutUs">
                        <div class="col-12 title-about-us">
                            <h1>Quienes somos</h1>
                        </div>
                        <article class="text-inicial">
                            <p>Somos un grupo consultor multidisciplinario, estrictos impulsores del desarrollo y creadores de estrategias de solución para todos nuestros clientes. Hemos creado una red de negocios de talla mundial. Nos enfocamos en diseñar e implementar soluciones que puedan ser rentables en todos los sectores y en cualquier país del mundo. Apostamos por un modelo de negocio que tiene como eje central participar activamente en el desarrollo organizacional de las empresas, a través de la optimización de recursos y acelerando la rentabilidad de las operaciones mediante consultoría en materia: Fiscal, Jurídica, Contable, Nóminas y Financiera.</p>
                            <!-- <p>Contamos con equipos de emprendedores, porque tenemos un fuerte vínculo con universidades de distintos países de América Latina, coadyuvamos en la formación multimodal que los jóvenes universitarios deben tener, porque las exigencias actuales del mundo de los negocios, no deben limitarse a un conocimiento local de las leyes, la parte financiera, tributaria y del propio recurso humano, estamos generando un Fondo de Inversión que apoye esta metodología y que genere especialistas técnicos con conocimientos globales que se especialicen en el cierre de negocios. </p> -->
                        </article>
                    </div>
                    <div class="col-md-6 content-img-aboutus">
                        <img src="imagenes/nosotros/somos.jpg" alt="">
                    </div>
                </div>
            </div>
</section>
<!--end section-about-us-->

<!--section-slogan-->
<section id="section-bgimg-about">
    <div class="content-img parallax"  style="background-image: url('imagenes/nosotros/abouts-us.jpg'); background-position: center center; background-origin: cover; background-repeat: no-repeat; background-size: cover;">
        <div class="overlay"></div>
    </div>
</section>
<!-- Siempre te ayudaremos a hacer crecer tu negocio
Nuestra misión es brindarle la más alta calidad de servicio y solución -->

<!--section-slogan-->
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
</section>
@stop