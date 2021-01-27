@extends('layout')

@section('content')

<!--imagen principal-->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Nosotros.webp');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 50,0">Gobierno Corporativo</h1>
</div>
<!--fin de imagen principal-->

<div id="wrapper" class="clearfix stretched">
		<img src="/imagenes/servix/gobierno.png" class="nav-nomobile" width="250px" style="position: absolute; z-index: 10;">
		<!-- Content
		============================================= -->
		<section id="content">

					<div id="side-navigation" class="tabs nav-nomobile">
					<!-- <div class="col_one_third nobottommargin" style="width: 480px; height: 600px;"> -->
						<div class="col_one_third nobottommargin" style="height: 600px;">

							<ul class="sidenav" style="vertical-align: middle">
								<!-- <li class="ui-tabs-active"><a href="#snav-content1" style="margin: 110px 0 0 190px; font-size:12px;"><span>Consultoría en Admon. de Empresas</span></a></li>
								<li><a href="#snav-content2" style="margin: 10px 0 0 195px;"><span>Asesoría Financiera</span></a></li>
								<li><a href="#snav-content3" style="margin: 10px 0 0 190px;"><span>Gestión Contable</span></a></li> -->
							</ul>
							
						</div>

						<div class="col_last nobottommargin">

							<div id="snav-content1">
								<div class="contserv">
								<!-- <h2>Consultoría en Administración de Empresas </h2> -->
								<strong>
									<p class="text-justify">Coadyuvamos en la institucionalización y mejores prácticas de empresas familiares para facilitar su incremento de valor y crecimiento, mediante la implementación de gobierno corporativo, de acuerdo a las necesidades de cada cliente.
										</p>

										</strong>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->
								</div>	

							</div>

						</div>

			</div>
			<div class="accordion accordion-bg clearfix nav-mobile">
				<div class="acctitle acctitlec">Gobierno Corporativo</div>
					<div class="acc_content clearfix" style="display: block;">
					<strong>
									<p class="text-justify">Coadyuvamos en la institucionalización y mejores prácticas de empresas familiares para facilitar su incremento de valor y crecimiento, mediante la implementación de gobierno corporativo, de acuerdo a las necesidades de cada cliente.
										</p>

										</strong>
					</div>

				
				</div>
		</section><!-- #content end -->


	</div><!-- #wrapper end -->
@stop