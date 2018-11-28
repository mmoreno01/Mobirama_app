@extends('layout')  

@section('content')

<!--section id="valores">
    <div class="container">
        <div class="row">
            <div class=" col-lg-12  col-md-3">
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
            </div>  <!-- col-12 
        </div> <!-- row 
    <div class="row">
            <div class="col-lg-12 col-md-9">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <h4>Valores</h4>
                                <h1>Servicio de Excelencia</h1>
                                <p>Servir a nuestros clientes con calidad resolviendo sus necesidades, asegurando su permanencia mediante una comunicación eficaz, clara y estrecha.</p>
                            </div>
                            <div class="col-sm-8 col-xs-12">
                                <img src="imagenes/valores/exelencia.jpg" class="img-responsive" alt="">
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
                                    <img src="imagenes/valores/inova.jpg" class="img-responsive" alt="">
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
                                <img src="imagenes/valores/inte.jpg" class="img-responsive" alt="">
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
                                <img src="imagenes/valores/equipo.jpg" class="img-responsive" alt="">
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
                                <img src="imagenes/valores/prof.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- tsab-content 
        </div><!--col-9
    </div><!--row-2   
</div><!-- container 
</section>-->


<!--<section  id="valores">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <img src="imagenes/valores/se.png" alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                    <img src="imagenes/valores/inov.png" alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                    <img src="imagenes/valores/int.png" alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-Tequipo-tab" data-toggle="pill" href="#pills-Tequipo" role="tab" aria-controls="pills-Tequipo" aria-selected="false">
                                    <img src="imagenes/valores/te.png" alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profesional-tab" data-toggle="pill" href="#pills-profesional" role="tab" aria-controls="pills-profesional" aria-selected="false">
                                    <img src="imagenes/valores/prof.png" alt="">
                                </a>
                            </li>
                        </ul>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12  col-xs-12">
                                        <h4>Valores</h4>
                                        <h1>Servicio de Excelencia</h1>
                                        <p>Servir a nuestros clientes con calidad resolviendo sus necesidades, asegurando su permanencia mediante una comunicación eficaz, clara y estrecha.</p>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <img src="imagenes/valores/exelencia.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12  col-xs-12">
                                            <h4>Valores</h4>
                                            <h1>Innovación</h1>
                                            <p>Cumplir con los compromisos adquiridos, utilizando nuestra creatividad y conocimiento en todo momento para mejorar la satisfacción al cliente, elevando la calidad y confiabilidad en todos nuestros servicios.</p>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <img src="imagenes/valores/inova.jpg" class="img-responsive" alt="">
                                        </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12  col-xs-12">
                                        <h4>Valores</h4>
                                        <h1>Integridad</h1>
                                        <p>Actuar con honestidad, ética y rectitud, realizar todas nuestras actividades con base en nuestros valores mediante un clima de disciplina y respeto.</p>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <img src="imagenes/valores/inte.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Tequipo" role="tabpanel" aria-labelledby="pills-Tequipo-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12  col-xs-12">
                                        <h4>Valores</h4>
                                        <h1>Trabajo en Equipo</h1>
                                        <p>Integrar esfuerzos colaborar en conjunto para el logro de nuestros objetivos mediante el desarrollo de nuestro talento, fomentando siempre el compañerismo y respeto.</p>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <img src="imagenes/valores/equipo.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profesional" role="tabpanel" aria-labelledby="pills-profesional-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12  col-xs-12">
                                        <h4>Valores</h4>
                                        <h1>Profesionalismo</h1>
                                        <p>Actuar siempre comprometidos en la aplicación de nuestros conocimientos, realizar nuestro trabajo con entrega, responsabilidad y seriedad.</p>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <img src="imagenes/valores/prof.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div> tsab-content 
            </div>
        </div>
    </div>
</section>-->


<section id="slider-valores">
    <div class="container">
        <section class="slider-nav slider">
                <div class="content-icon">
                        <img src="imagenes/valores/se.png" alt="">
                </div>
                <div class="content-icon">
                        <img src="imagenes/valores/inov.png" alt="">
                </div>
                <div class="content-icon">
                        <img src="imagenes/valores/int.png" alt="">
                </div>
                <div class="content-icon">
                        <img src="imagenes/valores/te.png" alt="">
                </div>
                <div class="content-icon">
                        <img src="imagenes/valores/prof.png" alt="">
                </div>
        </section>
        <section class="slider-for slider" data-sizes="50vw">
                <div>
                        <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12  col-xs-12">
                                    <h4>Valores</h4>
                                    <h1>Servicio de Excelencia</h1>
                                    <p>Servir a nuestros clientes con calidad resolviendo sus necesidades, asegurando su permanencia mediante una comunicación eficaz, clara y estrecha.</p>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 cont-desc-img">
                                    <img src="imagenes/valores/exelencia.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                </div>
                <div>
                        <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12  col-xs-12">
                                    <h4>Valores</h4>
                                    <h1>Innovación</h1>
                                    <p>Cumplir con los compromisos adquiridos, utilizando nuestra creatividad y conocimiento en todo momento para mejorar la satisfacción al cliente, elevando la calidad y confiabilidad en todos nuestros servicios.</p>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 cont-desc-img">
                                    <img src="imagenes/valores/inova.jpg" class="img-responsive" alt="">
                                </div>
                        </div>
                </div>
                <div>
                        <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12  col-xs-12">
                                    <h4>Valores</h4>
                                    <h1>Integridad</h1>
                                    <p>Actuar con honestidad, ética y rectitud, realizar todas nuestras actividades con base en nuestros valores mediante un clima de disciplina y respeto.</p>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 cont-desc-img">
                                    <img src="imagenes/valores/inte.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                </div>
                <div>
                        <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12  col-xs-12">
                                    <h4>Valores</h4>
                                    <h1>Trabajo en Equipo</h1>
                                    <p>Integrar esfuerzos colaborar en conjunto para el logro de nuestros objetivos mediante el desarrollo de nuestro talento, fomentando siempre el compañerismo y respeto.</p>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 cont-desc-img">
                                    <img src="imagenes/valores/equipo.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                </div>
                <div>
                        <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12  col-xs-12">
                                    <h4>Valores</h4>
                                    <h1>Profesionalismo</h1>
                                    <p>Actuar siempre comprometidos en la aplicación de nuestros conocimientos, realizar nuestro trabajo con entrega, responsabilidad y seriedad.</p>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 cont-desc-img">
                                    <img src="imagenes/valores/prof.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                </div>
        </section>
</div>
 
</section>

@stop