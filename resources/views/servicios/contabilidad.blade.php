@extends('layout')

@section('content')

<!--imagen principal-->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Contabiliad.webp');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 50,0">Contabilidad Outsourcing</h1>
</div>
<!--fin de imagen principal-->

<div id="wrapper" class="clearfix stretched">
		<img src="/imagenes/servix/contabilidad.png" class="nav-nomobile" width="250px" style="position: absolute; z-index: 10;">
		<!-- Content
		============================================= -->
		<section id="content">

					<div id="side-navigation" class="tabs nav-nomobile">

						<div class="col_one_third nobottommargin" style="width: 480px; height: 600px;">

							<ul class="sidenav" style="vertical-align: middle">
								<li class="ui-tabs-active"><a href="#snav-content1" style="margin: 110px 0 0 190px; font-size:12px;"><span>Consultoría en Admon. de Empresas</span></a></li>
								<li><a href="#snav-content2" style="margin: 10px 0 0 195px;"><span>Asesoría Financiera</span></a></li>
								<li><a href="#snav-content3" style="margin: 10px 0 0 190px;"><span>Gestión Contable</span></a></li>
							</ul>
							
						</div>

						<div class="col_last nobottommargin">

							<div id="snav-content1">
								<div class="contserv">
								<h2>Consultoría en Administración de Empresas </h2>
									<p class="text-justify"><strong>Mediante la consultoría en administración de empresas, Mobirama tiene como objetivo fundamental, proporcionar acciones estratégicas puntuales e implementar las medidas apropiadas para aumentar la productividad y la competitividad de nuestros clientes.
 										<br>Nuestro equipo de trabajo cuenta con el conocimiento y la experiencia para brindar consultoría a la medida, a empresas de cualquier sector industrial, orientando y ofreciendo las mejores soluciones, optimizando recursos y maximizando la rentabilidad de sus operaciones. Por ello Mobirama ofrece:
										
										<ul>
											<li>Realización de operaciones administrativas</li>
											<li>Manejo de banca</li>
											<li>Apoyo en políticas y procedimientos</li>
											
										</ul>
										<br>
										</strong> </p>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->
								</div>	

							</div>

							<div id="snav-content2"  class="contserv">
								<h2>Asesoría Financiera</h2>
									<strong>
										<p  class="text-justify">En Mobirama nuestros expertos están capacitados para asesorar de la mejor manera a tu empresa en la planeación de estrategias financieras y toma de decisiones clave que respalden el ciclo económico de sus negocios, garantizando el éxito continuo, así como un incremento en su rentabilidad.
											<br>Revisamos a fondo los estados financieros, y mediante la interpretación de indicadores que muestran la salud financiera de su organización, brindamos acompañamiento en la creación de estrategias adecuadas a la actividad empresarial, siempre al margen de las normas contables y fiscales. Nuestra solución comprende:
											</p> 
									<ul>
										<li>Revisión de estados financieros</li> 
										<li>Análisis y rentabilidad del negocio</li>
										<li>Flujo de efectivo</li> 
										<li>Razones financieras</li>
									</ul>
								</strong>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->

									
							</div>

							<div id="snav-content3"  class="contserv">
								<h2>Gestión Contable</h2>
									<strong><p class="text-justify">Sistema de información que ofrece compatibilidad, control y flexibilidad, acompañado de una correcta relación de coste y beneficio.
										<br>Nuestro objetivo principal es proporcionar a nuestros clientes información que permita guiar la gestión contable de la empresa de forma clara, para que se convierta en una herramienta más para la toma de decisiones. Con la finalidad de tener un mejor control de los movimientos comerciales y financieros de su organización, contamos con:
										
											</p> 
									<ul>
										<li>Registros contables de operaciones mensuales</li> 
										<li>Análisis de información financiera</li> 
										<li>Cumplimiento fiscal</li> 
										<li>Asesoría fiscal</li> 
									</ul></strong>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->


									
							</div>

						</div>

			</div>
			<div class="accordion accordion-bg clearfix nav-mobile">
				<div class="acctitle acctitlec">Consultoría en Administración de Empresas</div>
					<div class="acc_content clearfix" style="display: block;">
					<p class="text-justify"><strong>Mediante la consultoría en administración de empresas, Mobirama tiene como objetivo fundamental, proporcionar acciones estratégicas puntuales e implementar las medidas apropiadas para aumentar la productividad y la competitividad de nuestros clientes.
 										<br>Nuestro equipo de trabajo cuenta con el conocimiento y la experiencia para brindar consultoría a la medida, a empresas de cualquier sector industrial, orientando y ofreciendo las mejores soluciones, optimizando recursos y maximizando la rentabilidad de sus operaciones. Por ello Mobirama ofrece:
										
										<ul>
											<li>Realización de operaciones administrativas</li>
											<li>Manejo de banca</li>
											<li>Apoyo en políticas y procedimientos</li>
											
										</ul>
										<br>
										</strong> </p>
					</div>
				<div class="acctitle">Asesoría Financiera</div>
					<div class="acc_content clearfix" style="display: none;">
					<strong>
								<p  class="text-justify">En Mobirama nuestros expertos están capacitados para asesorar de la mejor manera a tu empresa en la planeación de estrategias financieras y toma de decisiones clave que respalden el ciclo económico de sus negocios, garantizando el éxito continuo, así como un incremento en su rentabilidad.
											<br>Revisamos a fondo los estados financieros, y mediante la interpretación de indicadores que muestran la salud financiera de su organización, brindamos acompañamiento en la creación de estrategias adecuadas a la actividad empresarial, siempre al margen de las normas contables y fiscales. Nuestra solución comprende:
											</p> 
									<ul>
										<li>Revisión de estados financieros</li> 
										<li>Análisis y rentabilidad del negocio</li>
										<li>Flujo de efectivo</li> 
										<li>Razones financieras</li>
									</ul>
								</strong>
					</div>	
				<div class="acctitle">Gestión Contable</div>
					<div class="acc_content clearfix" style="display: none;">
					<strong><p class="text-justify">Sistema de información que ofrece compatibilidad, control y flexibilidad, acompañado de una correcta relación de coste y beneficio.
										<br>Nuestro objetivo principal es proporcionar a nuestros clientes información que permita guiar la gestión contable de la empresa de forma clara, para que se convierta en una herramienta más para la toma de decisiones. Con la finalidad de tener un mejor control de los movimientos comerciales y financieros de su organización, contamos con:
										
											</p> 
									<ul>
										<li>Registros contables de operaciones mensuales</li> 
										<li>Análisis de información financiera</li> 
										<li>Cumplimiento fiscal</li> 
										<li>Asesoría fiscal</li> 
									</ul></strong>
					</div>	
				
				</div>
		</section><!-- #content end -->


	</div><!-- #wrapper end -->
@stop