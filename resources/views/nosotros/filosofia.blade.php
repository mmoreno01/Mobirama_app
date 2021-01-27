@extends('layout')

@section('content')
<!--imagen principal-->
    <div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn"  data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Filosofia.webp');">
        <div class="overlay"></div>
        <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown"  data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 100,0">Filosofía</h1>
    </div>
<!--fin imagen principal-->

<!--section-mision-->
    <section id="content-mision" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-12 content-title-mision">
                        <h1>Misión</h1>
                    </div>
                    <p>Ser un grupo multidisciplinario enfocado a la generación de negocios, rentabilidad y optimización de recursos para satisfacer las necesidades de nuestros socios y clientes, en nuestras Unidades de Negocios.</p>
                </div>
                <div class="col-md-6">
                    <img src="imagenes/filosofia/mision.jpg" alt="Mobirama Consultoria">
                </div>
            </div>
        </div>
    </section>
<!--End section-mision-->


<!--section-vision-->
    <section id="content-vision" class="wow fadeInDown"  data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-none d-md-block">
                    <img src="imagenes/filosofia/vision.jpg" alt="Mobirama Consultoria">
                </div>
                <div class="col-md-6">
                    <div class="col-12 content-title-vision">
                        <h1>Visión</h1>
                    </div>
                    <p>Consolidarnos en cada Unidad de Negocio como líderes en la implementación de servicios de consultoría integralmente competitivos a nivel global, generando valor a nuestros clientes y aliados estratégicos.</p>
                </div>
                <!--screend small-->
                <div class="col-md-6 d-md-none">
                        <img src="imagenes/filosofia/vision.jpg" alt="">
                </div>
                 <!--end screend small-->
            </div>
        </div>
    </section>
    <!--end section-vision-->
@stop