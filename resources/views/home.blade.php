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
        <div class="d-none d-sm-block">
            <slider-component></slider-component>
        </div>
<!-- fin de slider revolution -->

{{-- slider divices small --}}
<div id="carouselDivicesSmall" class="carousel slide d-block d-sm-none" data-ride="carousel">
    <div class="carousel-inner">
        {{-- <div class="carousel-item active">
            <a href="/contacto">
            <img src="imagenes/carousel/NOM035.jpg" class="d-block w-100" alt="..."></a>
        </div> --}}
        <div class="carousel-item active">
          <a href="https://www.mobirama.com.mx/blog/cumples-con-la-nom-035-recuerda-que-sera-obligatoria-y-entrara-en-vigor-el-proximo-mes-de-octubre/#.XVQy-ehKgdU">
            <img src="imagenes/carousel/NOM035.jpg" class="d-block w-100" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="/administracion_personal">
            <img src="imagenes/carousel/reclutamientoyseleccion.jpg" class="d-block w-100" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="/administracion_personal">
            <img src="imagenes/carousel/estudiossocioeconomicos.jpg" class="d-block w-100" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="/administracion_personal">
            <img src="imagenes/carousel/admon_nomina.jpg" class="d-block w-100" alt="..."></a>
      </div>
    </div>
  </div>
  {{-- slider divices small --}}

<!-- Modal execute init -->
 <div class="modal fade" id="mobiramaModal" tabindex="-1" role="dialog" aria-labelledby="mobiramaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      {{-- <div class="carousel-item active">
                       <a href="http://"></a> <img src="imagenes/home/Unknown-1.jpg" class="d-block w-100" alt="...">
                      </div> --}}
                      <div class="carousel-item active">
                           <img src="imagenes/home/popupbn2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                           <img src="imagenes/home/popbn1.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
          {{-- <img src="imagenes/home/Unknown-1.jpg" width="200" height="" alt="Mobirama"> --}}
          {{-- <a href="https://www.mobirama.com.mx/norma-035" class="btn btn-primary btn-link">Contactar --}}
    </div>
      <div class="content-btm">
            <article>
                <a id="btn-popInit" href="/contacto" class="btn btn-primary">Solicita más información</a>
            </article>
        </div>
    </div>
  </div>
</div>  
 <!--End Modal -->


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

<!-- Seccion de servicios  slider -->
<services-component></services-component>

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

       
<!-- Seccion de prensa 
<section id="content-informes" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
    {{-- <h2 class="text-center">News lettler</h2> --}}
    {{-- <div class="container"> --}}
		<div class="content_newsletter parallax d-flex justify-content-center"  style="background-image: url('imagenes/home/newslett1.jpg'); background-position: center-top; background-origin: cover; background-repeat: no-repeat; background-size: cover;">
			<div class="overlay"></div>
				<div class="title-newsletter wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.5s">
					<h2>Blog</h2>
                    <p>Conoce nuestras últimas noticias</p>
				</div>
			<a class="btn btn-primary  wow fadeInUp" href="/blog" data-wow-duration="1s" data-wow-delay="1s">Ver más</a>
		</div>
</section>
Fin de seccion de prensa -->

<!--seccion slider alianzas-->
<alianzas-component></alianzas-component>
<!--seccion slider alianzas-->


<!--seccion de notas blog-->
<blog-component></blog-component>
<!--fin seccion de notas blog-->


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

<!--section gaceta informativa
<section id="banner-gaceta" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
    <div class="container">
        <div class="content-img parallax d-flex justify-content-center" style=" background-image: url('imagenes/home/gaceta.jpg');">
            <div class="overlay"></div>
            <h2>GACETA</h2>
            <a  href="http://online.flipbuilder.com/zdih/eequ/" target="_blank">Ver más</a>
        </div>
    <div>
</section>
section gaceta informativa-->

@endsection