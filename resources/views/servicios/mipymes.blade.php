@extends('layout')

@section('content')

<!--imagen principal-->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Bolsa-Trabajo.webp');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 50,0">Mipymes</h1>
</div>
<!--fin de imagen principal-->

<div id="wrapper" class="clearfix stretched">
		<img src="/imagenes/servix/pyme.png" class="nav-nomobile" width="250px" style="position: absolute; z-index: 10;">
		<!-- Content
		============================================= -->
		<section id="content">

					<div id="side-navigation" class="tabs nav-nomobile">

						<div class="col_one_third nobottommargin" style="height: 600px;">

							<ul class="sidenav" style="vertical-align: middle">
								<!-- <li class="ui-tabs-active"><a href="#snav-content1" style="margin: 110px 0 0 190px; font-size:12px;"><span>Consultoría en Admon. de Empresas</span></a></li> -->
								<!-- <li><a href="#snav-content2" style="margin: 10px 0 0 195px;"><span>Asesoría Financiera</span></a></li> -->
								
							</ul>
							
						</div>

						<div class="col_last nobottommargin">

							<div id="snav-content1">
								<div class="contserv">
								<!-- <h2>Consultoría en Administración de Empresas </h2> -->
								
									<p class="text-justify">Para minimizar el efecto ocasionado por la disminución de la actividad en varios sectores económicos, en Mobirama contamos con un <span style="font-weight:600">plan integral de acompañamiento a Mipymes</span>, cuyo objetivo es mejorar el nivel de eficiencia productiva de las micro, pequeñas y medianas empresas.
										</p>
									<p class="text-justify">Para cumplir con este objetivo, nuestra red de expertos brinda acompañamiento en materia jurídica, fiscal, contable, capital humano, desalloro organizacional y otras áreas estrategicas, que se alinean y estructuran minuciosamente con base en un análisis de fortalezas y oportunidades de cada empresa, de acuerdo a la industria en la que se desenvuelve, para lograr así impulsar el desarrollo ecónomico y alcanzar una rentabilidad positiva.
										</p>
									<div style="text-align:center;">
									<a href="/contacto" class="btn btn-primary btnserv">Solicitar información </a>
									</div>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->
								</div>	

							</div>



						</div>

			</div>
			<div class="accordion accordion-bg clearfix nav-mobile">
				<div class="acctitle acctitlec">Mipymes</div>
					<div class="acc_content clearfix" style="display: block;">
					<p class="text-justify">Para minimizar el efecto ocasionado por la disminución de la actividad en varios sectores económicos, en Mobirama contamos con un <span style="font-weight:600">plan integral de acompañamiento a Mipymes</span>, cuyo objetivo es mejorar el nivel de eficiencia productiva de las micro, pequeñas y medianas empresas.
										</p>
									<p class="text-justify">Para cumplir con este objetivo, nuestra red de expertos brinda acompañamiento en materia jurídica, fiscal, contable, capital humano, desalloro organizacional y otras áreas estrategicas, que se alinean y estructuran minuciosamente con base en un análisis de fortalezas y oportunidades de cada empresa, de acuerdo a la industria en la que se desenvuelve, para lograr así impulsar el desarrollo ecónomico y alcanzar una rentabilidad positiva.
										</p>
					<div style="text-align:center;">
					<a href="/contacto" class="btn btn-primary btnserv">Solicitar información </a>
					</div>
					</div>	
				
				</div>
		</section><!-- #content end -->


	</div><!-- #wrapper end -->
@stop