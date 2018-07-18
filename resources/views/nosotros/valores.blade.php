@extends('layout')  

@section('content')

<section id="valores">
<div class="container">
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                        <img src="imagenes/valores/Servicio Excelencia.png" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <img src="imagenes/valores/Innovacion.png" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                        <img src="imagenes/valores/Integridad.png" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-Tequipo-tab" data-toggle="pill" href="#pills-Tequipo" role="tab" aria-controls="pills-Tequipo" aria-selected="false">
                        <img src="imagenes/valores/Trabajo en Equipo.png" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profesional-tab" data-toggle="pill" href="#pills-profesional" role="tab" aria-controls="pills-profesional" aria-selected="false">
                        <img src="imagenes/valores/Profesionalismo.png" alt="">
                    </a>
                </li>
            </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <h4>Valores</h4>
                        <h1>Servicio de Excelencia</h1>
                        <p>Servir a nuestros clientes con calidad resolviendo sus necesidades, asegurando su permanencia mediante una comunicación eficaz, clara y estrecha.</p>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <img src="imagenes/happy-middle-age-couple-having-breakfast-outstanding.jpg.img.1600.1528300087162.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <h4>Valores</h4>
                            <h1>Innovación</h1>
                            <p>Cumplir con los compromisos adquiridos, utilizando nuestra creatividad y conocimiento en todo momento para mejorar la satisfacción al cliente, elevando la calidad y confiabilidad en todos nuestros servicios.</p>
                        </div>
                        <div class="col-sm-8 col-xs-12">
                            <img src="imagenes/happy-middle-age-couple-having-breakfast-outstanding.jpg.img.1600.1528300087162.jpg" class="img-responsive" alt="">
                        </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <h4>Valores</h4>
                        <h1>Integridad</h1>
                        <p>Actuar con honestidad, ética y rectitud, realizar todas nuestras actividades con base en nuestros valores mediante un clima de disciplina y respeto.</p>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <img src="imagenes/happy-middle-age-couple-having-breakfast-outstanding.jpg.img.1600.1528300087162.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Tequipo" role="tabpanel" aria-labelledby="pills-Tequipo-tab">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <h4>Valores</h4>
                        <h1>Trabajo en Equipo</h1>
                        <p>Integrar esfuerzos colaborar en conjunto para el logro de nuestros objetivos mediante el desarrollo de nuestro talento, fomentando siempre el compañerismo y respeto.</p>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <img src="imagenes/happy-middle-age-couple-having-breakfast-outstanding.jpg.img.1600.1528300087162.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profesional" role="tabpanel" aria-labelledby="pills-profesional-tab">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <h4>Valores</h4>
                        <h1>Profesionalismo</h1>
                        <p>Actuar siempre comprometidos en la aplicación de nuestros conocimientos, realizar nuestro trabajo con entrega, responsabilidad y seriedad.</p>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <img src="imagenes/happy-middle-age-couple-having-breakfast-outstanding.jpg.img.1600.1528300087162.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
            </div><!-- tsab-content -->
        </div>  <!-- col-12 -->
    </div> <!-- row -->
</div><!-- container -->
</section>
@stop