@extends('layout')

@section('content')
<div class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('imagenes/m-service/bg-ms.jpg');">
    <!-- <h1 >Banca de Inversión</h1> -->
    <img class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 100,0" src="imagenes/home-icons/m-p.png" alt="">
</div>

<!-- section about-us -->
<section id="section-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="col-12  about-us-intro">
                    <h2>Servicio de Consultoría en Recursos Humanos </h2>
                           <span> ATRACCIÓN DE TALENTO EJECUTIVO</span>   
                </div>
                    <p>
                            Conocemos la inversión de tiempo, los costos involucrados y lo desgastante que puede convertirse el proceso de reclutamiento de personal para un ejecutivo ocupado como usted o para su departamento de Recursos Humanos  
                            Nosotros lo ayudamos a referir al personal fijo o temporal que su empresa necesita. 
                            Descubra las ventajas de reclutar en el menor tiempo a personal calificado y completamente evaluado a un costo competitivo.
 
                    </p>
                    <ul>
                        <li>Optimización de tiempo, al no tener que entrevistar candidatos que no se aproximan al perfil.</li>
                        <li>Reducción de búsquedas improductivas.</li>
                        <li>Anular la revisión y clasificación de currícula recibida por correo electrónico o en sistemas de búsqueda en línea.</li>
                        <li>Contratación de candidatos previamente evaluados y verificados.</li>
                        <li>Obtención de nuestra garantía de sustitución.</li>
                    </ul>
            </div>
            <div class="col-md-5">
                    <figure class="about-us-img wow fadeInLeft about-us-stick-bottom" style="visibility: visible;">
                            <img src="imagenes/m-personal/team_7.jpg" alt="about_person_bg">
                    </figure>
            </div>
        </div>
    </div>
</section>
<!-- End section about-us -->

<!-- section services -->
<section id="section-services-personal" class="parallax" style="background: url(imagenes/m-personal/services.jpg); background-position: center center;background-repeat: no-repeat;background-attachment: fixed; background-size: cover;overflow: hidden;
position: relative;
display: flex;
align-items: center;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 content-carousel">
                <h2 class="text-center">Nuestros Servicios</h2>
                <div class="owl-carousel owl-theme">
                    <div class="item-icon">
                        <i class="icon-yellow far fa-edit"></i>
                        <P>ANÁLISIS DE PERFIL</P>
                    </div>
                    <div class="item-icon">
                            <i class="icon-red fas fa-users"></i>
                            <P>RECLUTAMIENTO</P>
                    </div>
                    <div  class="item-icon">
                            <i class="icon-blue fas fa-user-check"></i>
                            <P>SELECCIÓN</P>
                    </div>
                    <div class="item-icon">
                            <i class="icon-green fas fa-clock"></i>
                            <P> TIEMPOS DE RESPUESTA</P>
                    </div>
                    <div class="item-icon"> 
                            <i class="fas fa-user-check"></i>
                            <P>Tax Payroll Managment</P>
                    </div>
                    <div class="item-icon"> 
                            <i class="fas fa-user-check"></i>
                            <P>Tax Payroll Managment</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section services -->
@stop