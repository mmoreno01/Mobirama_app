@extends('layout')

@section('content')

<!-- slider revolution -->
{{-- @include('sliderRevolution') --}}
<div  style=" width:100%; "class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
        <video autoplay="true" muted loop width="100%" height="100%">
				<source src='videos/lights banner mobirama .mp4' type='video/mp4' />
		</video>
</div>
<!-- fin de slider revolution -->

<!-- Modal execute init -->
<div class="modal fade" id="mobiramaModal" tabindex="-1" role="dialog" aria-labelledby="mobiramaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
          <img src="imagenes/home/banner mobirama-02.jpg" width="200" height="" alt="Mobirama">
          <article>
                <p>Conforme la Ley de Ingresos aprobada por el Poder Legislativo, el derecho de los contribuyentes<br>
                a la <span>"Compensación Universal"</span> ha sido derogado.</p>
                <p>La compesacion universal es el derecho que tienen los contribuyentes de restar las cantidades que
                tengan a su favor en un determinado impuesto federal de las cantidades que deben pagar por adeudos propios
                o por retencion a terceros.</p>
                <p>La división fiscal <span>MOBIRAMA</span> cuenta con las bases para concluir que esta derogación es material
                de amparo. <br>Estámos a sus órdenes para poder asesorarlo acerca de como enfrentar este tema.</p>
          <article>
      </div>
      <div class="content-btm">
            <article>
                <h2><span>Conoce</span> cómo obtener tu amparo ante la eliminación de<br> la <span>Compensación Universal</span></h2>
                <a href="/contacto" class="btn btn-primary">Solicita más información</a>
            </article>
        </div>
    </div>
  </div>
</div>
<!-- End Modal -->


<!--Seccion Nosotros -->
<section id="section-services" class=" wow fadeInDown" data-wow-duration="1s" data-wow-delay="2s">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 content-imgNosotros d-none d-lg-block">
                <img  src="imagenes/home/seccion-nosotros.jpg" alt="">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="row">
                        <div id="imgSobre" class="d-inline  content_textinf ">                           
                            <p class="title-txt">Nosotros</p>
                            <p> Somos una firma consultora que brinda soluciones bajo los estándares más estrictos de calidad. Nos distingue la excelencia y compromiso con nuestros clientes. </p>
                            <a href="/nosotros">Ver más</a> 
                        </div>
                        <div id="project01" class="d-inline  content_textinf"> 
                            <p class="title-txt">Ventejas Competitivas</p>
							<img src="imagenes/home/competive.gif">
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
                <img  src="imagenes/home/acercade.jpg" alt="">
            </div>
			<!-- imagen para md-sm-xs -->
        </div>
    </div>
</section>
<!--Fin de seccion nosotros -->

<!-- Seccion de servicios  slider -->
<section id="content_services"  name="content_services" class="my-5">
	<div class="contitle-services wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
		<h2>Nuestras Soluciones</h2>
	</div>
         <div id="owl-services"  class=" container owl-carousel owl-theme owl-loaded">
            <div id="icon01" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.3s">
                <a href="/payroll"><img src="imagenes/services/Payroll.png" alt="payroll service"></a>
			    <h1> <a href="/payroll">Payroll Service</a></h1>
            </div>
             <div id="icon03" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.6s">
                <a href="/capitalHumano"><img src="imagenes/services/CapitalHumano.png" alt="Capital Humano"></a>
                <h1><a  href="/capitalHumano">Administración de peronal</a></h1>
            </div>
             <div id="icon05" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.9s"> 
                <a href="/fiscal"><img src="imagenes/services/Fiscal.png" alt="Juridico Fiscal"></a> 
				<h1><a  href="/fiscal">Fiscal</a></h1> 
            </div>
             <div id="icon06" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="1.2s"> 
                 <a href="/maquilaNomina"><img src="imagenes/services/MaquilaSeguridadSocial.png" alt="Maquila de Seguridad Social"></a>
                 <h1><a href="/maquilaNomina">Maquila de Seguridad Social</a></h1> 
            </div>
             <div id="icon07" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="1.5s"> 
                <a href="/contabilidad"><img src="imagenes/services/Contabilidad .png" alt="Contabilidad"></a>
                <h1><a  href="/contabilidad">Contabilidad Outsourcing</a></h1>
            </div>
            <div id="icon08" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="1.8s"> 
                <a href="/juridico"><img src="imagenes/services/Legal.png" alt="juridico"></a>
                <h1><a href="/juridico">Jurídico</a></h1>
            </div>	
        </div>
</section>
<!-- fin de la seccion de servicios -->

<!-- Seccion aliazas y certificaciones -->
<section id="section-services2" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="row">
                    <div id="img-comunicado" class="d-inline content_imgtxt d-flex align-items-center">
                        <img src="imagenes/home-icons/alianzas.png" alt="">
                    </div>
                    <div id="cont-comunicado" class="d-inline content_textinf ">
                            <p class="title-txt">Alianzas Estrategicas</p>
                            <p>Nuestras alianzas nos permiten desarrollar proyectos con la seguridad de optimizar los recursos de nuestros clientes,
							 ofreciendo una excelente calidad de servicios</p> 
                            <a href="/alianzas">Ver más</a>
                    </div>
                    <div id="img-blog" class="d-inline content-blog content_imgtxt d-flex align-items-center">
                        <img src="imagenes/home-icons/certificacion.png" alt="">
                    </div>
                    <div id="cont-blog" class="d-inline content-blog content_textinf">
                            <p class="title-txt">Certificaciones y Distintivos</p>
                            <p>Somos una empresa consciente de nuestra responsabilidad y compromisos asumidos con nuestros clientes, colaboradores y México.</p> 
                            <a href="/certificaciones">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 content-img-alianza">
                <img  src="imagenes/home/seccion-alianza.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Fin de seccion alianzas y certificaciones -->

<!-- Seccion de prensa -->
<section id="content-informes" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
    {{-- <h2 class="text-center">News lettler</h2> --}}
    {{-- <div class="container"> --}}
		<div class="content_newsletter parallax d-flex justify-content-center"  style="background-image: url('imagenes/home/newslett1.jpg'); background-position: center-top; background-origin: cover; background-repeat: no-repeat; background-size: cover;">
			<div class="overlay"></div>
				<div class="title-newsletter wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.5s">
					<h2>Blog</h2>
                    <p>Conoce nuestras ultimas noticias</p>
				</div>
			<a class="btn btn-primary  wow fadeInUp" href="/blog" data-wow-duration="1s" data-wow-delay="1s">Ver más</a>
		</div>
		
        {{-- <div class="row"> --}}

            {{-- <div class="col-sm-12 col-md-6 cont-info">
				<div class="uk-text-center">
					<div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
						<div class="overlay overlay-bg"></div>
						<img class="uk-transition-scale-up uk-transition-opaque" src="imagenes/home/noticias.jpg" alt="">
						<div class="uk-position-center">
							<div class="uk-transition-slide-top-small"><h3 class="uk-margin-remove">Noticias &</h3></div>
							<div class="uk-transition-slide-bottom-small"><h3 class="uk-margin-remove">Comunicados</h3></div>
						</div>
					</div>
				</div>
            </div> --}}
			<!-- imagen para disposivilos lg, xl-->
            {{-- <div class="col-sm-12 col-md-6 cont-info d-none d-md-block">
				<div  class="uk-text-center">
						<div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
							<div class="overlay overlay-bg"></div>
							<img class="uk-transition-scale-up uk-transition-opaque" src="imagenes/home/blog.jpg" alt="">
							<div class="uk-position-center">
								<div class="uk-transition-slide-top-small"><h3 class="uk-margin-remove">Blog</h3></div>
							</div>
						</div>
				</div>
            </div> --}}
				<!-- fin imagen para disposivilos lg, xl-->
        {{-- </div> --}}
        {{-- <div class="row"> --}}
            {{-- <div class="col-sm-12 col-md-6 cont-info">
             
                    <div class=" cont-texto">
                        <p class="title-txt">Noticias </p>
                        <p class="text-intro"> Aquí encontrarás nuestras últimas publicaciones, notas de prensa y contenidos de interés.</p>         
                    </div>
                    <div class=" cont-icon">
					<button class="btn btn-noticia">Ver más</button>
						<a href="#" class="details-btn d-flex justify-content-center align-items-center">
								<span class="details">Ver más</span>
								<span class="lnr lnr-arrow-right"><i class="fas fa-arrow-right"></i></span>
							</a>						
                    </div>
                
            </div> --}}

			<!-- post para  dispostivos medianos -->
			{{-- <div class="col-sm-12 col-md-6 cont-info d-md-none">
				<div  class="uk-text-center">
						<div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
							<div class="overlay overlay-bg"></div>
							<img class="uk-transition-scale-up uk-transition-opaque" src="imagenes/home/blog.jpg" alt="">
							<div class="uk-position-center">
								<div class="uk-transition-slide-top-small"><h3 class="uk-margin-remove">Blog</h3></div>
							</div>
						</div>
				</div>
            </div> --}}
			<!-- fin post para  dispostivos medianos -->

            {{-- <div class="col-sm-12 col-md-6 cont-info">
              
                    <div class=" cont-texto">
                        <p class="title-txt">BLog</p>
                        <p class="text-intro">Julio, mes preferido de los mexicanos por las ofertas Durante las cuatro semanas</p>         
                    </div>
                    <div class=" cont-icon">
						<button class="btn btn-noticia">Ver más</button>
						<a href="#" class="details-btn d-flex justify-content-center align-items-center">
							<span class="details">Ver más</span>
							<span class="lnr lnr-arrow-right"><i class="fas fa-arrow-right"></i></span>
						</a>
                    </div> --}}
              
            {{-- </div> --}}
        {{-- </div> --}}
    {{-- </div> --}}
</section>
<!-- Fin de seccion de prensa -->

<!--Seccion contacto-cotizacion-bolsa de trabajo -->
<section id="rutas-informacion">
    <div class="container">
        <div class="row">
            <div id="content_ubicacion" class="col-md-6 cont-img wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
				<a href="/contacto.bolsaTrabajo"><img src="imagenes/home-icons/recluta.png" alt=""></a>
                <h3>bolsa de trabajo</h3>
                <p>Forma parte de una red global de profesionales.</p>
            </div>
            <div id="ruta-contacto" class="col-md-6 cont-img wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
				<a href="/contacto" class="wow fadeInUp" ><img src="imagenes/home-icons/Contacto.png" alt=""></a>
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