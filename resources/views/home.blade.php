@extends('layout')

@section('content')

<!-- START REVOLUTION SLIDER 5.0 -->

 <!--
	#################################
		- THEMEPUNCH BANNER -
	#################################
	-->
	<div class="tp-banner-container wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
		<div class="tp-banner" >
			<ul>

			<!-- SLIDE  -->
		<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1000"  data-fstransition="zoomout" data-fsmasterspeed="1000" data-fsslotamount="7"> 
			<!-- MAIN IMAGE -->
			<!-- <img src="images/video_forest.jpg"  alt="video_forest"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> -->
			<!-- LAYERS -->

			<!-- LAYER NR. 1 -->
			 <div class="tp-caption tp-fade fadeout fullscreenvideo"
				data-x="0"
				data-y="0"
				data-speed="1000"
				data-start="1100"
				data-easing="Power4.easeOut"
				data-endspeed="1500"
				data-endeasing="Power4.easeIn"
				data-autoplay="true"
				data-autoplayonlyfirsttime="false"
				data-nextslideatend="true"
				data-forceCover="1"
				data-dottedoverlay="twoxtwo"
				data-aspectratio="16:9"
				data-forcerewind="on"
				style="z-index: 2">


				<video class="video-js vjs-default-skin" preload="none" width="100%" height="100%"poster='' data-setup="{}">
				<source src='videos/intro-1_1mp4.mp4' type='video/mp4' />
				</video>

			</div> 
		</li>

				<!-- SLIDE  -->
				{{-- <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500" > --}}
					<!-- MAIN IMAGE 
					<img src="imagenes/home/black1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

					<!-- LAYER NR. 4 -->
					{{-- <div class="tp-caption large_text skewfromleftshort customout"
						data-x="80"
						data-y="150"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="900"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 5">
						<span style="font-size: 60px; text-transform: uppercase; letter-spacing: 15px; font-family: Montserrat; font-weight: 100; text-shadow: 5px 5px 5px rgba(0,0,0,.7); ">Mobirama</span>
					</div> --}}

					<!-- LAYER NR. texto iso -->
					{{-- <div class="tp-caption fade"
						data-x="710"
						data-y="90"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="1600"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 7">
						<span style="font-size: 15px;  color: #fff;">Norma Internacional ISO 9001</span>
					</div> --}}

					<!-- LAYER NR. texto GPTW -->
					{{-- <div class="tp-caption fade"
						data-x="710"
						data-y="230"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="1900"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 7">
						<span style="font-size: 15px;  color: #fff;">Con la confianza que nos distingue</span>
					</div> --}}

					<!-- LAYER NR. texto GPTW -->
					{{-- <div class="tp-caption fade"
						data-x="710"
						data-y="380"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="2300"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 7">
						<span style="font-size: 15px;  color: #fff;">Fuimos elegidos como una de las 50<br> mejores empresas deconsultoría<br> en México</span>
					</div> --}}

					<!-- LAYER NR. 7 -->
					{{-- <div class="tp-caption small_light_white  customin customout"
						data-x="80"
						data-y="200"
						data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="1300"
						data-easing="Power4.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 8; font-size: 20px; letter-spacing: 3px; ">Construyendo redes que conecten<br> el mundo de los negocios
					</div> --}}

					
					<!-- LAYER NR. 9 -->
					{{-- <div class="tp-caption large_bold_darkblue skewfromleftshort customout"
						data-x="right" data-hoffset="-90"
						data-y="60"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="1600"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 10; background-color:#fff; border-radius: 10px; 
						webkit-box-shadow: 5px 5px 5px 0px rgba(173,173,173,.7);
						-moz-box-shadow: 5px 5px 5px 0px rgba(173,173,173,.7);
						box-shadow: 5px 5px 5px 0px rgba(173,173,173,.7);">
						<img src="imagenes/home-icons/iso9001.png" alt="" data-ww="100" data-hh="100">
					</div> --}}

					<!-- LAYER NR. 13 -->
					{{-- <div class="tp-caption skewfromrightshort customout"
						data-x="right" data-hoffset="-90"
						data-y="bottom" data-voffset="-200"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="1900"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 14; background-color:#fff; border-radius: 10px;
						webkit-box-shadow: 5px 5px 5px 0px rgba(173,173,173,.7);
						-moz-box-shadow: 5px 5px 5px 0px rgba(173,173,173,.7);
						box-shadow: 5px 5px 5px 0px rgba(173,173,173,.7); ">
						<img src="imagenes/home-icons/GPTW.png" alt="" data-ww="100" data-hh="100">
					</div> --}}

				
					<!-- LAYER NR. 20 -->
					{{-- <div class="tp-caption  skewfromleftshort customout"
						data-x="right" data-hoffset="-90"
						data-y="bottom" data-voffset="-50"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="2300"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 21; background-color:#fff; border-radius: 10px;
						webkit-box-shadow: 5px 5px 5px 0px rgba(173,173,173,.7);
						-moz-box-shadow: 5px 5px 5px 0px rgba(173,173,173,.7);
						box-shadow: 5px 5px 5px 0px rgba(173,173,173,.7);">
						<img src="imagenes/home-icons/50Consultorias.png" alt="" data-ww="100" data-hh="100">
					</div> --}}
				</li>
	<!-- SLIDE  -->
		<!-- <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7"> -->
			<!-- MAIN IMAGE -->
			<!-- <img src="images/video_forest.jpg"  alt="video_forest"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> -->
			<!-- LAYERS -->

			<!-- LAYER NR. 1 -->
			<!-- <div class="tp-caption tp-fade fadeout fullscreenvideo"
				data-x="0"
				data-y="0"
				data-speed="1000"
				data-start="1100"
				data-easing="Power4.easeOut"
				data-endspeed="1500"
				data-endeasing="Power4.easeIn"
				data-autoplay="true"
				data-autoplayonlyfirsttime="false"
				data-nextslideatend="true"
				data-forceCover="1"
				data-dottedoverlay="twoxtwo"
				data-aspectratio="16:9"
				data-forcerewind="on"
				style="z-index: 2">


				 <video class="video-js vjs-default-skin" preload="none" width="100%" height="100%"
				poster='' data-setup="{}">
				<source src='videos/moburama jancheik.mp4' type='video/mp4' />
				</video>

			</div> -->
		</li>


		
				</li>
		<!-- SLIDE  -->
		<!-- <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1000"  data-fstransition="zoomout" data-fsmasterspeed="1000" data-fsslotamount="7"> -->
			<!-- MAIN IMAGE -->
			<!-- <img src="images/video_forest.jpg"  alt="video_forest"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> -->
			<!-- LAYERS -->

			<!-- LAYER NR. 1 -->
			<!-- <div class="tp-caption tp-fade fadeout fullscreenvideo"
				data-x="0"
				data-y="0"
				data-speed="1000"
				data-start="1100"
				data-easing="Power4.easeOut"
				data-endspeed="1500"
				data-endeasing="Power4.easeIn"
				data-autoplay="true"
				data-autoplayonlyfirsttime="false"
				data-nextslideatend="true"
				data-forceCover="1"
				data-dottedoverlay="twoxtwo"
				data-aspectratio="16:9"
				data-forcerewind="on"
				style="z-index: 2">


				 <video class="video-js vjs-default-skin" preload="none" width="100%" height="100%"
				poster='' data-setup="{}">
				<source src='videos/mobirama tl.mp4' type='video/mp4' />
				</video>

			</div> -->
		</li>

				<!-- SLIDE 2 -->
				<li data-transition="boxfade" data-slotamount="7" data-masterspeed="1000" >
					<!-- MAIN IMAGE -->
					<img src="imagenes/home/bg-chumano.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption  fade"
						data-x="80"
						data-y="160"
						data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="1300"
						data-easing="Power4.easeIn"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 8; 
						font-size: 60px; color:#16395f; font-weight: bold; letter-spacing: 3px;  text-shadow: 5px 5px 5px rgba(255,255,255,.7); ">Capital Humano
					</div>
					<!-- LAYER NR.  -->
					<div class="tp-caption small_light_white  customin customout"
						data-x="80"
						data-y="260"
						data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="800"
						data-start="1900"
						data-easing="Power4.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 8; font-weight: bold; color:#000; font-size: 20px; letter-spacing: 3px;">Reclutamiento Puro
					</div>

					<!-- LAYER NR.  -->
					<div class="tp-caption small_light_white  customin customout"
						data-x="80"
						data-y="300"
						data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="800"
						data-start="1900"
						data-easing="Power4.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 8;font-weight: bold; color:#000; font-size: 20px; letter-spacing: 3px;">Búsqueda de Talento Ejecutivo
					</div>
            
					<!-- LAYER NR.  -->
					<div class="tp-caption small_light_white  customin customout"
						data-x="80"
						data-y="340"
						data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="800"
						data-start="1900"
						data-easing="Power4.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 8; font-weight: bold; color:#000; font-size: 20px; letter-spacing: 3px;">Estudios de Verificación de Datos
					</div>
			</ul>
		</div>
	</div>
<!-- fin de slider revolution -->

<!-- Seccion de servicios  slider -->
<section id="content_services" class="my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			     <a href="/mobiramaServices"><img src="imagenes/home-icons/mservice.png"  alt="Mobirama Service"></a>

			</div>
			<div class="col-md-6">
			    <a href="/mobiramaPersonal"><img src="imagenes/home-icons/m-p.png"  alt="Mobirama Personal"></a>
			</div>
		</div>
	</div>
        <!--<div  class=" container owl-carousel owl-theme owl-loaded">
            <div id="icon01" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2s">
               <a href="http:/contabilidad"> <i class="fab fa-adn"></i>  </a> 
               <img src="imagenes/home-icons/Contabilidad-Out.png" alt="">
			   <a href="http:/contabilidad"> <P>Contabilidad Outsorcing</P></a>
        </div>
        <div id="icon02" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.1s">
               <!-- <a href="/fiscal"><i class="fab fa-adn"></i></a>    
                <img src="imagenes/home-icons/Fiscal.png" alt="">
                <a href="/fiscal"><P>Fiscal</P></a>
        </div>
             <div id="icon03" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.2s">
                    <!-- <a href="/payroll"><i class="fab fa-adn"></i></a>  
                <img src="imagenes/home-icons/Payroll.png" alt="">
                <a href="/payroll"><P>Payroll Service</P></a>
            </div>
             <div id="icon04" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.3s"> 
                    <!-- <a href="/division"><i class="fab fa-adn"></i></a>    
                <img src="imagenes/home-icons/Div-Financiera.png" alt="">
                <a href="/division"><P>División Financiera</P></a>
            </div>
             <div id="icon05" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.4s"> 
                    <!-- <a href="/capitalHumano"><i class="fab fa-adn"></i></a>    
                <img src="imagenes/home-icons/CapitalHumano.png" alt="">
				<a href="/capitalHumano"><P>Capital Humano</P></a> 
            </div>
             <div id="icon06" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.5s"> 
                    <!-- <a href="/bancaInversion"><i class="fab fa-adn"></i></a>    
                <img src="imagenes/home-icons/Fiscal.png" alt="">
                <a href="/bancaInversion"><P>Banca de Inversión</P></a> 
            </div>
             <div id="icon07" class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2s"> 
                    <!-- <a href="/estacionServicio"><i class="fab fa-adn"></i></a>    
                <img src="imagenes/home-icons/Doc-Estaciones.png" alt="">
                <a href="/estacionServicio"><P>Estaciones de Servicio</P></a>
            </div>	
        </div>-->
</section>
<!-- fin de la seccion de servicios -->


<!--Seccion Nosotros -->
<section id="section-services">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 content-imgNosotros d-none d-lg-block">
                <img  src="imagenes/home/acercade.jpg" alt="">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="row">
                        <div id="imgSobre" class="d-inline  content_imgtxt d-flex align-items-center">                           
                             <img  id="projectImg" src="imagenes/home-icons/SobreNosotros.png" alt="">
                        </div>
                        <div id="project01" class="d-inline  content_textinf"> 
                            <p class="title-txt">Nosotros</p>
                            <p> Somos una firma consultora que brinda soluciones bajo los estándares más estrictos de calidad. Nos distingue la excelencia y compromiso con nuestros clientes. </p>
                            <a href="/nosotros">Ver más</a> 
                        </div>
                        
                        <div id="project02" class="d-inline cont-textInf1">
                          	<i class="fas fa-check-circle"></i>
                            <p class="title-txt">Valores Institucionales</p>
                            <p>Estas acciones simbolizan la convicción que nos permite fortalecer nuestro talento.</p>
                            <a href="/valores">Ver más</a>
                        </div>
                        <div id="project03" class="d-inline cont-textInf2">
                            <i class="fas fa-users"></i>
                            <p class="title-txt">Filosofía Empresarial</p>
                            <p>Orientamos nuestro quehacer diario para contribuir al desarrollo de México, la firma y nuestros clientes.</p> 
                            <a href="/filosofia">Ver más</a>
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

<!-- Seccion aliazas y certificaciones -->
<section id="section-services2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="row">
                    <div id="img-comunicado" class="d-inline content_imgtxt d-flex align-items-center">
                        <img src="imagenes/home-icons/Comunicados.png" alt="">
                    </div>
                    <div id="cont-comunicado" class="d-inline content_textinf">
                            <p class="title-txt">Alianzas Estrategicas</p>
                            <p>Nuestras alianzas nos permiten desarrollar proyectos con la seguridad de optimizar los recursos de nuestros clientes,
							 ofreciendo una excelente calidad de servicios</p> 
                            <a href="http://">Ver más</a>
                    </div>
                    <div id="img-blog" class="d-inline content-blog content_imgtxt d-flex align-items-center">
                        <img src="imagenes/home-icons/Blog.png" alt="">
                    </div>
                    <div id="cont-blog" class="d-inline content-blog content_textinf">
                            <p class="title-txt">Certificaciones</p>
                            <p>Somos una empresa consciente de nuestra responsabilidad y compromisos asumidos con nuestros clientes, colaboradores y México.</p> 
                            <a href="http://">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 content-img-alianza">
                <img  src="imagenes/home/alianza1.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Fin de seccion alianzas y certificaciones -->

<!-- Seccion de prensa -->
<section id="content-informes">
    <h2 class="text-center">Noticias</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 cont-info">
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
            </div>
			<!-- imagen para disposivilos lg, xl-->
            <div class="col-sm-12 col-md-6 cont-info d-none d-md-block">
				<div  class="uk-text-center">
						<div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
							<div class="overlay overlay-bg"></div>
							<img class="uk-transition-scale-up uk-transition-opaque" src="imagenes/home/blog.jpg" alt="">
							<div class="uk-position-center">
								<div class="uk-transition-slide-top-small"><h3 class="uk-margin-remove">Blog</h3></div>
							</div>
						</div>
				</div>
            </div>
				<!-- fin imagen para disposivilos lg, xl-->
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 cont-info">
             
                    <div class=" cont-texto">
                        <p class="title-txt">Noticias </p>
                        <p class="text-intro"> Aquí encontrarás nuestras últimas publicaciones, notas de prensa y contenidos de interés.</p>         
                    </div>
                    <div class=" cont-icon">
					<button class="btn btn-noticia">Ver más</button>
						<!--	<a href="#" class="details-btn d-flex justify-content-center align-items-center">
								<span class="details">Ver más</span>
								<span class="lnr lnr-arrow-right"><i class="fas fa-arrow-right"></i></span>
							</a>-->							
                    </div>
                
            </div>

			<!-- post para  dispostivos medianos -->
			<div class="col-sm-12 col-md-6 cont-info d-md-none">
				<div  class="uk-text-center">
						<div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
							<div class="overlay overlay-bg"></div>
							<img class="uk-transition-scale-up uk-transition-opaque" src="imagenes/home/blog.jpg" alt="">
							<div class="uk-position-center">
								<div class="uk-transition-slide-top-small"><h3 class="uk-margin-remove">Blog</h3></div>
							</div>
						</div>
				</div>
            </div>
			<!-- fin post para  dispostivos medianos -->

            <div class="col-sm-12 col-md-6 cont-info">
              
                    <div class=" cont-texto">
                        <p class="title-txt">BLog</p>
                        <p class="text-intro">Julio, mes preferido de los mexicanos por las ofertas Durante las cuatro semanas</p>         
                    </div>
                    <div class=" cont-icon">
						<button class="btn btn-noticia">Ver más</button>
				<!--		<a href="#" class="details-btn d-flex justify-content-center align-items-center">
							<span class="details">Ver más</span>
							<span class="lnr lnr-arrow-right"><i class="fas fa-arrow-right"></i></span>
						</a>-->
                    </div>
              
            </div>
        </div>
    </div>
</section>
<!-- Fin de seccion de prensa -->

<!--Seccion contacto-cotizacion-bolsa de trabajo -->
<section id="rutas-informacion">
    <div class="container">
        <div class="row">
            <div id="content_ubicacion" class="col-md-4 cont-img">
				<a href="http:/ubicacion"><img src="imagenes/home-icons/Ubicacion.png" alt=""></a>
                <h3>bolsa de trabajo</h3>
                <p>Forma parte de una red global de profesionales.</p>
            </div>
            <div id="ruta-contacto" class="col-md-4 cont-img">
				<a href="http:/contacto"><img src="imagenes/home-icons/Contacto.png" alt=""></a>
                <h3>Contacto</h3>
                <p>Contacte a los expertos </p>
            </div>
            <div id="ruta-cotizacion" class="col-md-4 cont-img">
				<a href="http:/cotizacion"><img src="imagenes/home-icons/Cotizacion.png" alt=""></a>
                <h3>Cotizacion</h3>
                <p>Cotice nuestros servicios</p>
            </div>
        </div>
    </div>
</section>
<!--Fin Seccion contacto-cotizacion-bolsa de trabajo -->
@endsection