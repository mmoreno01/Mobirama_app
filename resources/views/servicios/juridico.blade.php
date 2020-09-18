@extends('layout')

@section('content')
<!--imagen principal-->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s"  uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Juridico.webp');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 90,0">Jurídico</h1>
</div>
<!--fin imagen principal-->
<div id="wrapper" class="clearfix stretched">
		<img src="/imagenes/servix/imagen.png" class="nav-nomobile" width="250px" style="position: absolute; z-index: 10;">
		<!-- Content
		============================================= -->
		<section id="content">

					<div id="side-navigation" class="tabs nav-nomobile">

						<div class="col_one_third nobottommargin" style="width: 480px; height: 600px;">

							<ul class="sidenav" style="vertical-align: middle">
								<li class="ui-tabs-active"><a href="#snav-content1" style="margin: 150px 0 0 205px;"><span>Fiscal</span></a></li>
								<li><a href="#snav-content2" style="margin: 10px 0 0 205px;"><span>Penal</span></a></li>
							</ul>
							
						</div>

						<div class="col_last nobottommargin">

							<div id="snav-content1"  class="contserv" style="">
								<h2>Fiscal</h2>
									<strong>
										<p  class="text-justify">Analizamos las diversas disposiciones fiscales, con el objetivo de brindar a nuestros clientes certeza jurídica para optimizar las cargas tributarias que les corresponden, atendiendo las disposiciones fiscales vigentes y garantizando su tranquilidad y la de su negocio. Nuestros expertos se encuentran en constante actualización respecto a los cambios de las disposiciones para ofrecer:
										</p> 
									<ul>
										<li>Consultoría Fiscal-legal</li> 
										<li>Litigio Fiscal</li>
											<ul  style="margin: 0 0 0 130px;">
												<li>Juicio contencioso administrativo federal y local</li>
												<li>Juicio de amparo directo e indirecto</li>
												<li>Defensa fiscal en contra de actos o resoluciones de autoridades fiscales, federales y en materia de seguridad social</li>
												<li>Acuerdos conclusivos ante la PRODECON</li>
												<li>Atención a procedimiento administrativo de ejecución: <i>Embargos de cuentas bancarias, requerimientos de pago y embargo, intervención con cargo a la caja, remoción y designación de depositario.</i></li>
												<li>Recursos de revocación</li>
											</ul>
										<li>Devolución de impuestos</li>
										<li>Ofrecimiento de garantía</li>
										<li>Desinmovilización de cuentas bancarias</li>
										<li>Amparo contra leyes</li>
									</ul>
								</strong>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->

									
							</div>

							<div id="snav-content2"  class="contserv">
								<h2>Penal</h2>
									<strong>
										<p  class="text-justify">Aportamos valor a tu empresa mediante un acompañamiento personalizado, puntual y oportuno, llevado a cabo por expertos que se encuentran en constante actualización normativa y penal, con la finalidad de defender y garantizar el éxito de las compañías, para ello Mobirama cuenta con servicios de:
										</p> 
									<ul>
										<li>Cumplimiento corporativo en materia de prevención del delito</li> 
										<li>Cumplimiento corporativo en materia de prevención de actos de corrupción</li>
										<li>Transacciones y derecho financiero</li> 
										<li>Delitos patrimoniales</li>
										<li>Auditoría en materia penal</li>
										<li>Amparo penal</li>
										<li>Capacitación penal empresarial</li>
									</ul>
								</strong>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->

									
							</div>

					</div>

			</div>
			<div class="accordion accordion-bg clearfix nav-mobile">
				<div class="acctitle acctitlec">Fiscal</div>
					<div class="acc_content clearfix" style="display: block;">
					<strong>
										<p  class="text-justify">Analizamos las diversas disposiciones fiscales, con el objetivo de brindar a nuestros clientes certeza jurídica para optimizar las cargas tributarias que les corresponden, atendiendo las disposiciones fiscales vigentes y garantizando su tranquilidad y la de su negocio. Nuestros expertos se encuentran en constante actualización respecto a los cambios de las disposiciones para ofrecer:
										</p> 
									<ul>
										<li>Consultoría Fiscal-legal</li> 
										<li>Litigio Fiscal</li>
											<ul  style="margin: 0 0 0 130px;">
												<li>Juicio contencioso administrativo federal y local</li>
												<li>Juicio de amparo directo e indirecto</li>
												<li>Defensa fiscal en contra de actos o resoluciones de autoridades fiscales, federales y en materia de seguridad social</li>
												<li>Acuerdos conclusivos ante la PRODECON</li>
												<li>Atención a procedimiento administrativo de ejecución: <i>Embargos de cuentas bancarias, requerimientos de pago y embargo, intervención con cargo a la caja, remoción y designación de depositario.</i></li>
												<li>Recursos de revocación</li>
											</ul>
										<li>Devolución de impuestos</li>
										<li>Ofrecimiento de garantía</li>
										<li>Desinmovilización de cuentas bancarias</li>
										<li>Amparo contra leyes</li>
									</ul>
								</strong>
					</div>
					
				<div class="acctitle">Penal</div>
					<div class="acc_content clearfix" style="display: none;">
					<strong>
										<p  class="text-justify">Aportamos valor a tu empresa mediante un acompañamiento personalizado, puntual y oportuno, llevado a cabo por expertos que se encuentran en constante actualización normativa y penal, con la finalidad de defender y garantizar el éxito de las compañías, para ello Mobirama cuenta con servicios de:
										</p> 
									<ul>
										<li>Cumplimiento corporativo en materia de prevención del delito</li> 
										<li>Cumplimiento corporativo en materia de prevención de actos de corrupción</li>
										<li>Transacciones y derecho financiero</li> 
										<li>Delitos patrimoniales</li>
										<li>Auditoría en materia penal</li>
										<li>Amparo penal</li>
										<li>Capacitación penal empresarial</li>
									</ul>
								</strong>
					</div>	
				
				</div>
		</section><!-- #content end -->


	</div><!-- #wrapper end -->

@stop