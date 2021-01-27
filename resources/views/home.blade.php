@extends('layout')

@section('content')

<!-- page load-->
{{-- <div class="page-loader">
    <div class="loader"></div>
</div>  --}}
<!-- slider revolution -->
        {{-- <div  style=" width:100%; "class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
                <video autoplay="true" muted loop width="100%" height="100%">
                        <source src='videos/portada fcbk v.2 sd.mp4' type='video/mp4' />
                </video>
        </div> --}}
        <div class="">
            <slider-component></slider-component>
        </div>
<!-- fin de slider revolution -->


<!-- Modal execute init 
 <div class="modal" id="mobiramaModal" tabindex="-1" role="dialog" aria-labelledby="mobiramaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:red;">&times;</span>
        </button>
        <a href="http://mobirama.com.mx/mobi-rama" target="_blank">
      <div class="modal-body" style="position: relative;">
            <img src="imagenes/popup/diagnostico_covidpopup~1.webp" class="" width="200" height="" alt="Mobirama">       
    </div>
    </a>
    </div>
  </div>
</div>  
 End Modal  -->

 


<!--Seccion Nosotros -->
<section id="section-services" class=" wow fadeInDown" data-wow-duration="1s" data-wow-delay="2s">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 content-imgNosotros d-none d-lg-block">
                <img  src="imagenes/home/seccion-nosotros.jpg" alt="Mobirama">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="row">
                        <div id="imgSobre" class="d-inline  content_textinf ">                           
                            <p class="title-txt">Nosotros</p>
                                <p>Somos una consultoría integral de negocios, la práctica profesional de más de 25 años nos posiciona como un socio estratégico en el acompañamiento empresarial.</p>
                            <a href="/nosotros">Ver más</a> 
                        </div>
                        <div id="project01" class="d-inline  content_textinf"> 
                            <p class="title-txt">Ventejas Competitivas</p>
							<img src="imagenes/home/competive.png" alt="Mobirama">
                        </div>
                        
                        <div id="project02" class="d-inline cont-textInf1">
						    <i class="fas fa-users"></i>
                            <p class="title-txt">Filosofía Empresarial</p>
							<p>Orientamos nuestro quehacer diario para contribuir al desarrollo de México, la firma y nuestros clientes.</p> 
                            <a href="/filosofia ">Ver más</a>
                        </div>
                        <div id="project03" class="d-inline cont-textInf2">
							<i class="fas fa-check-circle"></i>
							<p class="title-txt">Valores Institucionales</p>
							<p>Estas acciones simbolizan la convicción que nos permite fortalecer nuestro talento.</p>
                            <a href="/valores">Ver más</a>
                        </div>
                </div>
            </div>
			<!-- imagen para md-sm-xs -->
			<div class="col-sm-12 col-md-12 col-lg-12 content-imgNosotros d-lg-none" style="margin-top: 30px; padding: 0px;">
                <img  src="imagenes/home/acercade.jpg" alt="Mobirama">
            </div>
			<!-- imagen para md-sm-xs -->
        </div>
    </div>
</section>
<!--Fin de seccion nosotros -->

<!-- seccion de trasmicion en vivo -->
    <!--<envivo-component></envivo-component>-->
<!-- fin seccion de trasmicion en vivo -->

<!-- Seccion de servicios  slider -->
<!-- <services-component></services-component> -->
<div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="row" style="margin: 70px 0 0 0 !important;">
                <h2>Nuestras soluciones</h2>
                </div>
            </div>
        </div>
</div>
<services-circular></services-circular>

<!-- fin de la seccion de servicios -->

<!-- Seccion aliazas y certificaciones -->
<section id="section-services2" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="row">
                    <div id="img-comunicado" class="d-inline content_imgtxt d-flex align-items-center">
                        <img src="imagenes/home-icons/alianzas.png" alt="Mobirama">
                    </div>
                    <div id="cont-comunicado" class="d-inline content_textinf ">
                            <p class="title-txt">Alianzas Estratégicas</p>
                            <p>Nuestras alianzas nos permiten desarrollar proyectos con la seguridad de optimizar los recursos de nuestros clientes,
							 ofreciendo una excelente calidad de servicios</p> 
                            <a href="/alianzas">Ver más</a>
                    </div>
                    <div id="img-blog" class="d-inline content-blog content_imgtxt d-flex align-items-center">
                        <img src="imagenes/home-icons/certificacion.png" alt="Mobirama">
                    </div>
                    <div id="cont-blog" class="d-inline content-blog content_textinf">
                            <p class="title-txt">Certificaciones y Distintivos</p>
                            <p>Somos una empresa consciente de nuestra responsabilidad y compromisos asumidos con nuestros clientes, colaboradores y México.</p> 
                            <a href="/certificaciones">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 content-img-alianza">
                <img  src="imagenes/home/seccion-alianza.jpg" alt="Mobirama">
            </div>
        </div>
    </div>
</section>
<!-- Fin de seccion alianzas y certificaciones -->

<!--seccion de noticias-->
<post-component></post-component> 
<!--fin de la seccion noticias-->

<!--seccion slider alianzas-->
<alianzas-component></alianzas-component>
<!--seccion slider alianzas-->


<!--seccion de notas blog-->
<blog-component></blog-component>
<!--fin seccion de notas blog-->
<div style="text-align:center;">
<a class="btn btn-primary m-r-5 center" href="http://www.mobirama.mx/blog/" style="color:#fff;">Más artículos</a>
</div>
<!--Seccion contacto-cotizacion-bolsa de trabajo -->
<section id="rutas-informacion">
    <div class="container">
        <div class="row">
            <div id="content_ubicacion" class="col-md-6 cont-img wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
				<a href="/contacto.bolsaTrabajo"><img src="imagenes/home-icons/recluta.png" alt="Mobirama"></a>
                <h3>bolsa de trabajo</h3>
                <p>Forma parte de una red global de profesionales.</p>
            </div>
            <div id="ruta-contacto" class="col-md-6 cont-img wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
				<a href="/contacto" class="wow fadeInUp" ><img src="imagenes/home-icons/Contacto.png" alt="Mobirama"></a>
                <h3>Contacto</h3>
                <p>Contacte a los expertos </p>
            </div>
            {{-- <div id="ruta-cotizacion" class="col-md-4 cont-img">
				<a href="http:/cotizacion"><img src="imagenes/home-icons/Cotizacion.png" alt=""></a>
                <h3>Cotizacion</h3>
                <p>Cotice nuestros servicios</p>
            </div> --}}
        </div>
    </div>
</section>
<!--Fin Seccion contacto-cotizacion-bolsa de trabajo -->

@endsection