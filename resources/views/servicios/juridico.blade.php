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

								<li class="ui-tabs-active"><a href="#snav-content1" style="margin: 20px 0 0 125px;"><span> Civil</span></a></li>
								<li><a href="#snav-content2" style="margin: 10px 0 0 190px;"><span> Corporativo</span></a></li>
								<li><a href="#snav-content3" style="margin: 10px 0 0 205px;"><span>Fiscal</span></a></li>
								<li><a href="#snav-content4" style="margin: 10px 0 0 205px;"><span>Laboral</span></a></li>
								<li><a href="#snav-content5" style="margin: 10px 0 0 190px;"><span>Mercantil</span></a></li>
								<li><a href="#snav-content6" style="margin: 10px 0 0 125px;"><span>Penal</span></a></li>

							</ul>
							
						</div>

						<div class="col_last nobottommargin">
							<div id="snav-content1"  class="contserv" style="">
								<h2>Civil</h2>
									<strong>	
										<ul>
											<li>Análisis, desarrollo e implementación de estrategias de defensa en contra de actos civiles.  </li> 
											<li>Asesoría en materia de actos civiles y familiares.</li>
											<li>Representación en juicios ordinarios civiles, elaboración y revisión de contratos en materia civil, contratos de arrendamiento, asesoría en materia inmobiliaria, trámites ante el Registro Público de la Propiedad.</li>
											<li>Representación en patentes y derechos de autor.</li>
										</ul>
									</strong>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->	
							</div>

							<div id="snav-content2"  class="contserv">
								<h2>Corporativo</h2>
									<strong> 
										<ul>
											<li>Actos de comercio con proveedores y clientes.</li> 
											<li>Análisis respecto al área de propiedad industrial (marcas, patentes, nombres comerciales, modelos de utilidad, etc.)</li>
											<li>Auditoria preventiva en temas de la Ley Anti-lavado.</li> 
											<li>Revisión de la información corporativa, tales como: Estatutos, poderes, libros corporativos, capital social.</li>
										</ul>
									</strong>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->		
							</div>
							<div id="snav-content3"  class="contserv">
								<h2>Fiscal</h2>
									<strong>	 
										<ul>
											<li>Interposición de recursos administrativos. </li> 
											<li>Interposición de Juicio contencioso administrativo.</li>
											<li>Interposición de Juicios de amparo. </li> 
											<li>Amparo en contra de aseguramiento de cuentas bancarias.</li>
											<li>Asesoría y defensa en impuesto predial y derechos por suministro de agua. </li>
											<li>Asesoría y defensa en responsabilidad de servidores públicos.</li>
											<li>Solución de problemáticas jurídicas derivadas de implicaciones fiscales.</li>
										</ul>
									</strong>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->		
							</div>
							<div id="snav-content4"  class="contserv">
								<h2>Laboral</h2>
									<strong>	 
										<ul>
											<li>Análisis, desarrollo e implementación de estrategias de defensa en contra de despidos injustificados o falta imputable al patrón.</li> 
											<li>Análisis de las relaciones obrero patronales y colectivas, incluyendo sus implicaciones y riesgos para patrones así como para los trabajadores.</li>
											<li>Asesoría y defensa en Seguridad Social.</li> 
											<li>Atención y defensa de visitas de Secretaría del Trabajo e IMSS.</li>
											<li>Atención, defensa y gestión en relaciones colectivas y conatos de huelga.</li>
											<li>Cumplimiento normativo en la administración de personal, sea de manera directa o por medio de un tercero.</li>
											<li>Correcta implementación NOM-35.</li>
										</ul>
									</strong>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->		
							</div>
							<div id="snav-content5"  class="contserv">
								<h2>Mercantil</h2>
									<strong>	 
										<ul>
											<li>Análisis, desarrollo e implementación de estrategias de defensa en contra de actos mercantiles, elaboración de contratos.</li> 
											<li>Cobro de documentos mercantiles tales como pagarés, cheques, letras de cambio, facturas y contratos.</li>
											<li>Representación en juicios de cartera vencida y cualquier asesoría en materia de actos mercantiles.</li> 
										</ul>
									</strong>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->		
							</div>
							<div id="snav-content6"  class="contserv">
								<h2>Penal</h2>
									<strong>	 
										<ul>
											<li>Atención especializada en el caso de incurrir en delitos fiscales derivados de facultades de comprobación de la Autoridad Fiscal.</li> 
											<li>Atención de actos ante la Unidad de Inteligencia Financiera (UIF).</li>
											<li>Compliance penal para evitar incurrir en alguna conducta delictiva.</li> 
											<li>Defensa jurídico penal. </li> 
										</ul>
									</strong>
									<!-- <div class="center"><a  href=""><button type="button">clicme!!!</button></a> </div> -->		
							</div>
					</div>
			</div>


			<div class="accordion accordion-bg clearfix nav-mobile">
				<div class="acctitle acctitlec">Civil</div>
					<div class="acc_content clearfix" style="display: block;">
						<strong>										
							<ul>
								<li>Análisis, desarrollo e implementación de estrategias de defensa en contra de actos civiles.  </li> 
								<li>Asesoría en materia de actos civiles y familiares.</li>
								<li>Representación en juicios ordinarios civiles, elaboración y revisión de contratos en materia civil, contratos de arrendamiento, asesoría en materia inmobiliaria, trámites ante el Registro Público de la Propiedad.</li>
								<li>Representación en patentes y derechos de autor.</li>
							</ul>
						</strong>
					</div>
					<div class="acctitle">Corporativo</div>
						<div class="acc_content clearfix" style="display: none;">
							<strong>
								<ul>
									<li>Actos de comercio con proveedores y clientes.</li> 
									<li>Análisis respecto al área de propiedad industrial (marcas, patentes, nombres comerciales, modelos de utilidad, etc.)</li>
									<li>Auditoria preventiva en temas de la Ley Anti-lavado.</li> 
									<li>Revisión de la información corporativa, tales como: Estatutos, poderes, libros corporativos, capital social.</li>
								</ul>
							</strong>
						</div>	
					<div class="acctitle">Fiscal</div>
						<div class="acc_content clearfix" style="display: none;">
							<strong>
								<ul>
									<li>Interposición de recursos administrativos. </li> 
									<li>Interposición de Juicio contencioso administrativo.</li>
									<li>Interposición de Juicios de amparo. </li> 
									<li>Amparo en contra de aseguramiento de cuentas bancarias.</li>
									<li>Asesoría y defensa en impuesto predial y derechos por suministro de agua. </li>
									<li>Asesoría y defensa en responsabilidad de servidores públicos.</li>
									<li>Solución de problemáticas jurídicas derivadas de implicaciones fiscales.</li>
								</ul>
							</strong>
						</div>	
					<div class="acctitle">Laboral</div>
						<div class="acc_content clearfix" style="display: none;">
							<strong>
								<ul>
									<li>Análisis, desarrollo e implementación de estrategias de defensa en contra de despidos injustificados o falta imputable al patrón.</li> 
									<li>Análisis de las relaciones obrero patronales y colectivas, incluyendo sus implicaciones y riesgos para patrones así como para los trabajadores.</li>
									<li>Asesoría y defensa en Seguridad Social. </li> 
									<li>Atención y defensa de visitas de Secretaría del Trabajo e IMSS.</li>
									<li>Atención, defensa y gestión en relaciones colectivas y conatos de huelga.</li>
									<li>Cumplimiento normativo en la administración de personal, sea de manera directa o por medio de un tercero.</li>
									<li>Correcta implementación NOM-35.</li>
								</ul>
							</strong>
						</div>	
					<div class="acctitle">Mercantil</div>
						<div class="acc_content clearfix" style="display: none;">
							<strong>
								<ul>
									<li>Análisis, desarrollo e implementación de estrategias de defensa en contra de actos mercantiles, elaboración de contratos.</li> 
									<li>Cobro de documentos mercantiles tales como pagarés, cheques, letras de cambio, facturas y contratos.</li>
									<li>Representación en juicios de cartera vencida y cualquier asesoría en materia de actos mercantiles. </li> 
								</ul>
							</strong>
						</div>
				<div class="acctitle">Penal</div>
					<div class="acc_content clearfix" style="display: none;">
						<strong>	
							<ul>
								<li>Atención especializada en el caso de incurrir en delitos fiscales derivados de facultades de comprobación de la Autoridad Fiscal.</li> 
								<li>Atención de actos ante la Unidad de Inteligencia Financiera (UIF).</li>
								<li>Compliance penal para evitar incurrir en alguna conducta delictiva.</li> 
								<li>Defensa jurídico penal. </li>
							</ul>
						</strong>
					</div>	
				</div>
				
		</section><!-- #content end -->


	</div><!-- #wrapper end -->

@stop