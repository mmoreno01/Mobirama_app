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
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
					<!-- MAIN IMAGE -->
					<img src="imagenes/home/slide.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                 
					<!-- LAYER NR. 1 -->
					<div class="tp-caption lightgrey_divider skewfromrightshort customout"
						data-x="85"
						data-y="224"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="1200"
						data-easing="Power4.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 2">
					</div>

					<!-- LAYER NR. 2 -->
					<!-- <div class="tp-caption customin customout"
						data-x="center" data-hoffset="100"
						data-y="bottom" data-voffset="0"
						data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="800"
						data-start="700"
						data-easing="Power4.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						style="z-index: 3"><img src="imagenes/images/woman.png" alt="">
					</div> -->

					<!-- LAYER NR. 3 -->
					<div class="tp-caption large_bold_grey skewfromrightshort customout"
						data-x="80"
						data-y="96"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="800"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 4">Join Bussines
					</div>

					<!-- LAYER NR. 4 -->
					{{-- <div class="tp-caption medium_thin_grey skewfromleftshort customout"
						data-x="285"
						data-y="122"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="900"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 5">
					</div> --}}

					<!-- LAYER NR. 5 -->
					<div class="tp-caption medium_thin_grey skewfromrightshort customout"
						data-x="80"
						data-y="175"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="1000"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 6">Global Group
					</div>

					<!-- LAYER NR. 6 -->
					{{-- <div class="tp-caption large_bold_grey skewfromleftshort customout"
						data-x="175"
						data-y="152"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="1100"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 7">
					</div> --}}

					<!-- LAYER NR. 7 -->
					<div class="tp-caption small_thin_grey customin customout"
						data-x="80"
						data-y="240"
						data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="1300"
						data-easing="Power4.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 8">Slider Revolution is the highly acclaimed<br/> slide-based displaying solution, thousands of<br/> businesses, theme developers and everyday<br/> people use and love!
					</div>

					<!-- LAYER NR. 8 -->
					<div class="tp-caption skewfromrightshort customout"
						data-x="816"
						data-y="207"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="1750"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 9"><img src="imagenes/images/graph.png" alt="" data-ww="52" data-hh="44">
					</div>

					<!-- LAYER NR. 9 -->
					<div class="tp-caption large_bold_darkblue skewfromleftshort customout"
						data-x="right" data-hoffset="-90"
						data-y="60"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="1600"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 10">1000's
					</div>

					<!-- LAYER NR. 10 -->
					<div class="tp-caption medium_bg_darkblue skewfromleftshort customout"
						data-x="right" data-hoffset="-90"
						data-y="125"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="1650"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 11">Of Happy Users
					</div>

					<!-- LAYER NR. 11 -->
					<div class="tp-caption medium_bold_red skewfromrightshort customout"
						data-x="right" data-hoffset="-90"
						data-y="200"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="1800"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 12">Rekord Breaking
					</div>

					<!-- LAYER NR. 12 -->
					<div class="tp-caption medium_light_red skewfromrightshort customout"
						data-x="right" data-hoffset="-90"
						data-y="center" data-voffset="-10"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="1850"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 13">Sales on CodeCanyon
					</div>

					<!-- LAYER NR. 13 -->
					<div class="tp-caption medium_bg_red skewfromrightshort customout"
						data-x="right" data-hoffset="-90"
						data-y="bottom" data-voffset="-200"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="1900"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 14">A Professional Solution
					</div>

					<!-- LAYER NR. 14 -->
					<div class="tp-caption medium_bold_orange skewfromleftshort customout"
						data-x="right" data-hoffset="-90"
						data-y="340"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="2000"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 15">4.7<span style="font-weight:300;">/5 Stars</span>
					</div>

					<!-- LAYER NR. 15 -->
					<div class="tp-caption customin customout"
						data-x="right" data-hoffset="-90"
						data-y="bottom" data-voffset="-103"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="1000"
						data-start="2050"
						data-easing="Power4.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 16"><img src="imagenes/images/star.png" alt="" data-ww="20" data-hh="20">
					</div>

					<!-- LAYER NR. 16 -->
					<div class="tp-caption customin customout"
						data-x="right" data-hoffset="-115"
						data-y="bottom" data-voffset="-103"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="1000"
						data-start="2100"
						data-easing="Power4.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 17"><img src="imagenes/images/star.png" alt="" data-ww="20" data-hh="20">
					</div>

					<!-- LAYER NR. 17 -->
					<div class="tp-caption customin customout"
						data-x="right" data-hoffset="-140"
						data-y="bottom" data-voffset="-103"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="1000"
						data-start="2150"
						data-easing="Power4.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 18"><img src="imagenes/images/star.png" alt="" data-ww="20" data-hh="20">
					</div>

					<!-- LAYER NR. 18 -->
					<div class="tp-caption customin customout"
						data-x="right" data-hoffset="-165"
						data-y="bottom" data-voffset="-103"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="1000"
						data-start="2200"
						data-easing="Power4.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 19"><img src="imagenes/images/star.png" alt="" data-ww="20" data-hh="20">
					</div>

					<!-- LAYER NR. 19 -->
					<div class="tp-caption customin customout"
						data-x="right" data-hoffset="-190"
						data-y="bottom" data-voffset="-103"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="1000"
						data-start="2250"
						data-easing="Power4.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 20"><img src="imagenes/images/star.png" alt="" data-ww="20" data-hh="20">
					</div>

					<!-- LAYER NR. 20 -->
					<div class="tp-caption medium_bg_orange skewfromleftshort customout"
						data-x="right" data-hoffset="-90"
						data-y="bottom" data-voffset="-50"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="2300"
						data-easing="Back.easeOut"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						data-captionhidden="on"
						style="z-index: 21">Customer Rating
					</div>
				</li>

				</li>
				<!-- SLIDE  -->
				<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
					<!-- MAIN IMAGE -->
					<img src="imagenes/2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->

                    
                    <div class="tp-caption tentered_white_huge lft tp-resizeme start" 
                            data-x="center" 
                            data-y="center"
                            data-endspeed="300"
                            data-easing="Power4.easeOut" 
                            data-start="1100" 
                            data-speed="300" 
                            data-hoffset="0" 
                            style="color: rgb(255, 255, 255); text-transform: uppercase; font-size: 40px; letter-spacing: 6px; font-family: Montserrat; font-weight: 400; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 57px; border-width: 0px; margin: 0px; padding: 0px; left: 278px; top: 280px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">
							Creative Premium Template
                    </div>
                    <div class="tp-caption tentered_white_huge lfb tp-resizeme start" 
                            data-endspeed="300" 
                            data-easing="Power4.easeOut" 
                            data-start="800" 
                            data-speed="600" 
                            data-y="300" 
                            data-hoffset="0" 
                            data-x="center" 
                            style="color: rgb(255, 255, 255); font-size: 13px; text-transform: uppercase; letter-spacing: 10px; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 18px; border-width: 0px; margin: 0px; padding: 0px; left: 457.5px; top: 350px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">
                                ready to use for everyone
                    </div>
                    <a href="#" class="tp-caption lfb tp-resizeme rs-parallaxlevel-0 start hasclicklistener" 
                            data-x="center" 
                            data-y="350" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                            data-speed="500" 
                            data-start="1200" 
                            data-easing="Power3.easeInOut" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-elementdelay="0.1" 
                            data-endelementdelay="0.1" 
                            data-linktoslide="next" 
                            style="z-index: 12; white-space: nowrap; padding: 15px 28px; color: rgb(255, 255, 255); text-transform: uppercase; border: 0px none; background: rgb(0, 0, 0); font-size: 12px; letter-spacing: 3px; font-family: Montserrat; border-radius: 0px; display: table; transition: all 0.4s ease 0s; cursor: pointer; min-height: 0px; min-width: 0px; line-height: 17px; margin: 0px; left: 573px; top: 400px; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">
                            Ver más
                    </a>

				</li>

			</ul>
		</div>
	</div>
<!-- fin de slider revolution -->

<!-- seccion de servicios en slider -->
<section id="content_services" class="my-5">
        <div class=" container owl-carousel">
            <div class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2s">
               <!-- <a href="http:/contabilidad"> <i class="fab fa-adn"></i>  </a> -->
               <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
			   <a href="http:/contabilidad"> <P>Contabilidad Outsorcing</P></a>
            </div>
            <div class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.1s">
               <!-- <a href="/fiscal"><i class="fab fa-adn"></i></a>    -->
                <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
                <a href="/fiscal"><P>Fiscal</P></a>
            </div>
             <div class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.2s">
                    <!-- <a href="/payroll"><i class="fab fa-adn"></i></a>  -->
                <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
                <a href="/payroll"><P>Payroll Service</P></a>
            </div>
             <div class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.3s"> 
                    <!-- <a href="/division"><i class="fab fa-adn"></i></a>    -->
                <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
                <a href="/division"><P>División Financiera</P></a>
            </div>
             <div class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.4s"> 
                    <!-- <a href="/capitalHumano"><i class="fab fa-adn"></i></a>    -->
                <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
				<a href="/capitalHumano"><P>Capital Humano</P></a> 
            </div>
             <div class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2.5s"> 
                    <!-- <a href="/bancaInversion"><i class="fab fa-adn"></i></a>    -->
                <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
                <a href="/bancaInversion"><P>Banca de Inversión</P></a> 
            </div>
             <div class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2s"> 
                    <!-- <a href="/estacionServicio"><i class="fab fa-adn"></i></a>    -->
                <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
                <a href="/estacionServicio"><P>Estaciones de Servicio</P></a>
            </div>
             <div class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="2s"> 
                    <!-- <a href="/sofom"><i class="fab fa-adn"></i></a>    -->
				<img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
				<a href="/sofom"><P>Sofom</P></a>
            </div>
        </div>
</section>
<!-- fin de la seccion de servicios -->


<!-- primera seccion de servicios temporales -->
<section id="section-services">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
			<div class="uk-background-fixed uk-background-cover uk-height-large uk-width-large" style="background-image: url(imagenes/home/acerca.jpg"></div>

                <!-- <div id="content-imgizq" class="">
                    <img src="imagenes/marquee-young-girl-with-dog-with-ipad-tablet-outstanding.jpg.img.1600.1528315188974.jpg" alt="">
                </div> -->
            </div>
            <div class="col-md-6">
                <div class="row wow fadeIn"  data-wow-duration="1s" data-wow-delay="2s">
                    
                        <div id="project00" class="d-inline  content_imgtxt">                           
                             <img  id="projectImg" src="imagenes/negocio-outstanding-opportunity-micro.png.img.320.1524238583197.png" alt="">
                        </div>
                        <div id="project01" class="d-inline  content_textinf"> 
                            <p class="title-txt">Sobre nosotros</p>
                            <p> Somos una firma consultora que brinda soluciones bajo los estándares más estrictos de calidad. Nos distingue la excelencia y compromiso con nuestros clientes. </p>
                            <a href="/nosotros">Ver más</a> 
                        </div>
                        
                        <div id="project02" class="d-inline cont-textInf1">
                            <i class="fab fa-adn"></i>  
                            <p class="title-txt">Valores Institucionales</p>
                            <p>Estas acciones simbolizan la convicción que nos permite fortalecer nuestro talento.</p>
                            <a href="/valores">Ver más</a>
                        </div>
                        <div id="project03" class="d-inline cont-textInf2">
                            <i class="fab fa-adn"></i>  
                            <p class="title-txt">Filosofia de la empresa</p>
                            <p>Orientamos nuestro que hacer diario para contribuir al desarrollo de México, la firma y nuestros clientes.</p> 
                            <a href="/filosofia">Ver más</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--fin  primera seccion de servicios temporales -->

<!-- segunda seccion de servicios temporales -->
<section id="section-services2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="d-inline content_imgtxt">
                        <img src="imagenes/negocio-outstanding-opportunity-micro.png.img.320.1524238583197.png" alt="">
                    </div>
                    <div class="d-inline content_textinf">
                            <i class="fab fa-adn"></i>  
                            <p class="title-txt">  Comunicados  </p>
                            <p>Join Business Global Group es un gran lugar para trabajar en México. 
								La cultura empresarial de Join Business Global Group es única gracias a sus extraordinarios colaboradores
							</p> 
                            <a href="http://">Ver más</a>
                    </div>
                    <div class="d-inline content_imgtxt">
                        <img src="imagenes/negocio-outstanding-opportunity-micro.png.img.320.1524238583197.png" alt="">
                    </div>
                    <div class="d-inline content_textinf">
                            <i class="fab fa-adn"></i>  
                            <p class="title-txt">Blog</p>
                            <p>Julio, mes preferido de los mexicanos por las ofertas Durante las cuatro semanas de julio aumentan las compras para el hogar en tiendas de autoservicio.</p> 
                            <a href="http://">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                    <div id="content-img">
                        <img src="imagenes/home/prensa.jpg" alt="">
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- fin  segunda seccion de servicios temporales -->

<!-- seccion de informes general -->
<section id="content-informes">
    <h2 class="text-center">Sala de prensa </h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 cont-info">
				<div class="uk-text-center">
					<div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
						<img class="uk-transition-scale-up uk-transition-opaque" src="imagenes/1.jpg" alt="">
						<div class="uk-position-center">
							<div class="uk-transition-slide-top-small"><h4 class="uk-margin-remove">Noticias</h4></div>
							<div class="uk-transition-slide-bottom-small"><h4 class="uk-margin-remove">Nacionales</h4></div>
						</div>
					</div>
				</div>
                <!-- <div class="img-info">
					<img src="imagenes/Login_June-bmovil.jpg.img.1176.1528216817889.jpg" alt="">
					<img src="imagenes/1.jpg" alt="">
                </div> -->
            </div>
            <div class="col-md-6 cont-info">
				<div class="uk-text-center">
						<div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
							<img class="uk-transition-scale-up uk-transition-opaque" src="imagenes/1.jpg" alt="">
							<div class="uk-position-center">
								<div class="uk-transition-slide-top-small"><h4 class="uk-margin-remove">Noticias</h4></div>
								<div class="uk-transition-slide-bottom-small"><h4 class="uk-margin-remove">Internacionales</h4></div>
							</div>
						</div>
				</div>
                <!-- <div class="img-info">
					<img src="imagenes/1.jpg" alt="">
                    <img src="imagenes/Login_June-bmovil.jpg.img.1176.1528216817889.jpg" alt="">
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 cont-info">
                <div class="row">
                    <div class="d-inline cont-texto">
                        <p class="title-txt">Lorem ipsum dolor sit amet consectetur</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint porro nulla neque</p>         
                    </div>
                    <div class="d-inline cont-icon">
                        <img src="imagenes/bbva-send-logo-morado.png.img.320.1527087145451.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 cont-info">
                <div class="row">
                    <div class="d-inline cont-texto">
                        <p class="title-txt">Lorem ipsum dolor sit amet consectetur</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint porro nulla neque</p>         
                    </div>
                    <div class="d-inline cont-icon">
                        <img src="imagenes/bbva-send-logo-morado.png.img.320.1527087145451.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- seccion de informes general -->

<!-- // seccion de rutas de informacion -->
<section id="rutas-informacion">
    <div class="container">
        <div class="row">
            <div class="col-md-4 cont-img">
			<a href="http:/ubicacion"><img src="imagenes/plane.png.img.320.1520271142016.png" alt=""><a>
                <h3>Ubicacion</h3>
                <p>Acérquese a nosotros </p>
            </div>
            <div class="col-md-4 cont-img">
			<a href="http:/contacto"><img src="imagenes/plane.png.img.320.1520271142016.png" alt=""><a>
                <h3>Contacto</h3>
                <p>Contacte a los expertos </p>
            </div>
            <div class="col-md-4 cont-img">
			<a href="http:/cotizacion"><img src="imagenes/plane.png.img.320.1520271142016.png" alt=""><a>
                <h3>Cotizacion</h3>
                <p>Cotice nuestros servicios</p>
            </div>
        </div>
    </div>
</section>
<!-- fin de seccion de rutas de informacion -->



    <!-- <h1>hola mun</h1> -->
    <!-- <ul> -->
        <!-- @foreach($users as $user) -->
        <!-- <li> {{$user}}</li>     -->
        <!-- @endforeach  -->

    <!-- </ul> -->
    <!-- <button class="btn btn-danger">Ver más</button> -->
@endsection