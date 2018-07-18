@extends('layout')  

@section('content')
<!--Seccion de texto promociones-->

<section id="promo-text">  
        <h1 class="text-center my-5">Promociones <span>JB Card</span> </h1> 
    <div class="container">
        <div class="row">
            <div class="col">
              <p> <span> ¡Sabemos que obtener un descuento o un ahorro inesperado siempre es una grata sorpresa!</span></p>
                <p>Aprovecha los descuentos en los establecimientos en donde hemos hecho convenios para que nuestros colaboradores y sus familias gocen de un servicio exclusivo, sólo deberas presentar tu tarjeta JB CARD</p>
            </div>
        </div>
    </div>
</section>
 <!--fin Seccion de texto promociones-->

 <!-- Modal -->
 <div class="modal fade" id="julio" tabindex="-1" role="dialog" aria-labelledby="julioLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="julioLabel">Términos y Condiciones</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ul>
                <li>10% de descuento en mercancia de temporada en las boutiques Julio del area metropolitana y del interior de la Republica. El empleado debera presentar su credencial de la empresa. No es valido enPalacio de Hierro ni franquicias. 
                    Numero Cliente 1170 ( para dudas o aclaraciones, favor de acercarse al área de Capital Humano )</li>
                <li> PRESENTANDO CREDENCIAL </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="chopo" tabindex="-1" role="dialog" aria-labelledby="chopoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="chopoLabel">Términos y Condiciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ul>
                    <li>En sucursales:</li>
                    <li>15% de descuento en estudios de laboratorio*.</li>
                    <li>10% de descuento en estudios de gabinete</li>
                    <li>10% de descuento en estudios especiales* como tomografía, resonancia magnética, electrocardiografía dinámica y electroencefalografía </li>
                    <li> 13% de descuento extra en cualquier promoción y en los perfiles descritos en la Manteleta de sucursal</li>
                    <li>PRESENTANDO CREDENCIAL Y NUMERO DE CONVENIO</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="mujersana" tabindex="-1" role="dialog" aria-labelledby="mujersanaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="mujersanaLabel">Términos y Condiciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Check up ginecológico $900 incluye : Consulta, colposopía, papanicoao, ultrasonido endovagional, ultrasonido mamario y exploración mamaria. EXTENSIVO A FAMILIARES</li>
                    <li>20% en el resto de los procedimientos.</li>
                    <li>PRESENTANDO CREDENCIAL</li>
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="dr_hugo_campos" tabindex="-1" role="dialog" aria-labelledby="dr_hugo_camposLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="dr_hugo_camposLabel">Términos y Condiciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                        <li>DESCUENTO EN OPERATORIA DENTAL, PREVENTIVA, CIRUGÍA, ODONTOPEDIATRÍA PERIODONCIA, PROTESIS, ENDODONCIA, NOTA: EN LAS ESPECIALIDADES DE ORTODONCIA, DISEÑO DE SONRISA E IMPLANTOLOGÍALOS EL PRESUPUESTO SE REALIZARÁ DEPENDIENDO DEL DIAGNOSTICO </li>                
                        <li> CREDENCIAL DE TRABAJADOR Y TARJETA JBCARD</li>
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="laser-vision" tabindex="-1" role="dialog" aria-labelledby="laser-visionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="laser-visionLabel">Términos y Condiciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                        <li>Consultas Optométricas – Oftalmológicas con un descuento especial, quedando de precio comercial $600.00 a un precio preferencial de $300.00.</li> 

                            <li>Lentes Oftálmicos Económicos Graduados, con anti reflejante, graduación igual o menor a 2.00 dioptrías, $800.00 y $1000.00 según armazón a elegir. De 2.00 a 4.00 dioptrías son $300.00 adicionales y más de 4.25 dioptrías son $600.00 adicionales del precio base.</li> 
                            
                           <li> Lentes Oftálmicos Graduados de línea, con anti reflejante, graduación igual o menor a 2.00 dioptrías, características según necesidad del paciente, de $1,300.00 en adelante. Mayor a esta graduación, se especifica el precio al empleado. De 2.00 a 4.00 dioptrías son $300.00 adicionales y más de 4.25 dioptrías son $600.00 adicionales del precio base</li> 
                            
                           <li>Lentes Oftálmicos Graduados de diseño, con anti reflejante, graduación igual o menor a 2.00 dioptrías, características según necesidad del paciente, a partir de $1,700.00.Mayor a esta graduación, se especifica el precio al empleado. De 2.00 a 4.00 dioptrías son $300.00 adicionales y más de 4.25 dioptrías son $600.00 adicionales del precio base.</li> 
                            
                           <li> Lentes oftálmicos Graduados de Marca, con anti reflejante, graduación igual o menor a 2.00 dioptrías, (Ferrioni, Oggi, Boy London, Nivada, Puma, Benetton, Cloe, Tous, Police, Replay, Elizabeth Arden, Fragata, Bill Blas, Línea Roma) a partir de $2,800.00. Mayor a esta graduación, se especifica el precio al empleado. De 2.00 a 4.00 dioptrías son $300.00 adicionales y más de 4.25 dioptrías son $600.00 adicionales del precio base.</li> 
                            
                          <li>recios adicionales en tratamientos: Foto cromático $500.00, tinte tono 1: $150.00, tinte tono 2: $200.00 y tinte tono 3: $ 300.00.</li> 
                            
                           <li>Cirugía Láser, para corrección de miopía, hipermetropía y/o astigmatismo, precio preferencial para empleados y/o familiares de JOIN BUSINESS, de $17,500.00 a $14,500.00 (Incluye gastos hospitalarios, honorarios médicos y 4 consultas post-operatorias por un periodo máximo de 3 meses).</li> 
                            
                          <li> PRESENTANDO TARJETA</li> 

                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="ostar" tabindex="-1" role="dialog" aria-labelledby="ostarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ostarLabel">Términos y Condiciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul> <li> Tarifas preferenciales por noche en habitación estandar, en ocupación sencilla o doble para: Hotel Ramada Gateway Orlando en dólares americanos. Hoteles en México D.F, 
                        Acapulco, Cuernavaca, Veracruz,Aguascalientes, Villahermosa, Orlando y Baja California..</li>
                    <li>10% o 15% en consumos en restaurantes y bares en el hotel </li>
                    <li> Desuentos en diferentes servicios ( spa, lavandería, trasportación, renta de autos, diversiones,) depende el destino</li>
                    <li>RESERVACIÓN (esta debe hacerse por medio de Capital Humano)</li>
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="realdeminasqueretaro" tabindex="-1" role="dialog" aria-labelledby="realdeminasqueretaroLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="realdeminasqueretaroLabel">Términos y Condiciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul> 
                        <li>Tarifas preferencial en habitación estándar superior sencilla/doble con desayuno tipo buffet $1,100.00 10% de descuento en alimentos y bebidas en los centros de consumo del hotel Invitación a eventos especiales</li>
                        <li>RESERVACIÓN CON NO- DE CLIENTE 36336 (esta debe hacerse por medio de Capital Humano) </li>
                </ul>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal -->
<div class="modal fade" id="sixflags" tabindex="-1" role="dialog" aria-labelledby="sixflagsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="sixflagsLabel">Términos y Condiciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul> 
                        <li>Cupón de descuento por $150 de descuento.</li>
                        <li>  PRESENTANDO CUPÓN Y TARJETA JBCARD)</li>  
                </ul>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="bioparqueestrella" tabindex="-1" role="dialog" aria-labelledby="bioparqueestrellaLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="bioparqueestrellaLabel">Términos y Condiciones</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <ul> 
                            <li>33% de descuento a las personas que se identifiquen con la credencial asi como a 4 acompañantes del mismo.</li>
                            <li>PRESENTANDO CREDENCIAL</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>


<!-- Modal -->
<div class="modal fade" id="cinemex" tabindex="-1" role="dialog" aria-labelledby="cinemexLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="cinemexLabel">Términos y Condiciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul> 
                        <li>Compra de boletos corporativos sujeto a cambios, comprando los boletos se tienen 3 meses para utilizar Descuentos en boletos de concierto y obras teatrales.  </li>
                        <li>PRESENTANDO CREDENCIAL </li>
                                               
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="papeleriadabo" tabindex="-1" role="dialog" aria-labelledby="papeleriadaboLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="papeleriadaboLabel">Términos y Condiciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul> 
                        <li>10 % de descuento menudeo pago en efectivo, menudeo..</li>
                        <li>TARJETA DE BENEFICIOS JB CARD Ó JB CARD PLUS  </li>
                </ul>
            </div>
          </div>
        </div>
      </div>


<!-- Modal -->
<div class="modal fade" id="universidadlondres" tabindex="-1" role="dialog" aria-labelledby="universidadlondresLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="universidadlondresLabel">Términos y Condiciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul> 
                        <li> Descuento del 50% en la Inscripción y colegiatura de Preparatoria, 50% en Inscripción y Colegiatura de las siguientes </li>
                        <li>Licenciaturas:Derecho, Pedagogía, Psicología, Mercadotecnia, Administración. Descuento del 40% en Inscripción y Colegiatura de las siguientes Licenciaturas:Diseño de Modas, Gastronomía, Nutrición, Tecnologías de la Información.</li> 
                        <li>Descuento del 50% en Inscripción y Colegiatura de las siguientes Licenciaturas en Fin de Semana: Administración de Empresas, Contaduría, Derecho, Informática, Mercadotecnia, Pedagogía. Descuento del 50% en Inscripción y Colegiatura de los siguientes programas de Maestría:
                                Administración de Recursos Humanos, Administración de Negocios, Derecho Corporativo, Derecho Penal, Docencia Universitaria, Educación Especial, Finanzas, Innovación Educativa, Psicoterapia Familiar, Sistemas y Tecnologías de la Información. </li>
                        <li>PRESENTANDO NUMERO DE CONVENIO Y TARJETA.</li>   
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="unitec" tabindex="-1" role="dialog" aria-labelledby="unitecLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="unitecLabel">Términos y Condiciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul> 
                        <li> Becas para colaboradores y familiares directos de JBGG. Nivel preparatoria del 20% al 40%, licenciatura tradicional del 15% al 35%, licenciatura ejecutiva y en línea del 5% al 25% y en maestrías del 20% al 40%, cada porcentaje depende del promedio escolar. Sin cobro de inscripción ni reinscripción. </li>
                        <li>CREDENCIAL DE TRABAJADOR Y TARJETA JBCARD, O COPIA DEL CONVENIO. </li>  

                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="unitec" tabindex="-1" role="dialog" aria-labelledby="unitecLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="unitecLabel">Términos y Condiciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul> 
                        <li>Descuentos en cursos, especialidades, dipomados, maestrias y doctorados.</li>
                        <li>PRESENTANDO CREDENCIAL</li>

                </ul>
            </div>
          </div>
        </div>
      </div>

 <!-- Modal -->
      <div class="modal fade" id="ICEL" tabindex="-1" role="dialog" aria-labelledby="ICELLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="ICELLabel">Términos y Condiciones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <ul> 
                            <li>Descuentos del 20% en parcialidades a empleados, y familiares consanguíneos en la línea recta ascendentes y descendientes (esposa, padres, hermanos e hijos), acreditados fehacientemente sobre las tarifas que tenga “
                                    El descuento se dará en cualquier campus, carrera y turnos que actualmente tiene “La Universidad” y que son:</li>
                                  
                                    <ul>
                                            <li>SERVICIOS EDUCATIVOS:</li>
                                           <li> Bachilleratos tecnológicos</li>
                                           <li>Licenciaturas</li> 
                                           <li>Especialidades</li> 
                                           <li>Maestrías</li> 
                                    </ul>
                                    <li>TURNOS: Matutino, Vespertino, Nocturno y Sabatino.
                                        Para conservar este descuento, el alumno deberá cumplir, entre otras obligaciones, con la acreditación de todas las materias sin interrumpir sus estudios (no darse de baja) y mantener un promedio mínimo de 8.5 (ocho punto cinco), tratándose de alumnos de los niveles bachillerato y licenciatura y 9.0 (nueve punto cero para estudiantes de posgrado); realizar todos los pagos con puntualidad, de acuerdo con el calendario escolar y sin tener recargos o adeudos, además de dar cabal cumplimiento a la reglamentación interna de la institución relacionada con su desempeño académico y conducta, misma que se le dará a conocer al momento de su inscripción.</li> 
    
                                   <li>CREDENCIAL DE TRABAJADOR Y TARJETA JBCAR</li>
      
                      </ul>
                  </div>
                </div>
              </div>
            </div>
      

<!--seccion salud y bienestar-->
<Section id="content-salud">
    <h2 class="text-center my-5">Salud y <span>Bienestar</span></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img src="imagenes/promociones/julio.png" alt="" data-toggle="modal" data-target="#julio"> 
            </div>
            <div class="col-md-4 col-sm-4">
                    <img src="imagenes/promociones/chopo.png"  alt="" data-toggle="modal" data-target="#chopo">
            </div>
            <div class="col-md-4 col-sm-4">
                    <img src="imagenes/promociones/devlyn.png" alt="" data-toggle="modal" data-target="#chopo"> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                    <img src="imagenes/promociones/mujersana.png" alt="" data-toggle="modal" data-target="#mujersana">  
            </div>
            <div class="col-md-4 col-sm-4">
                    <img src="imagenes/promociones/dr_hugo_campos.png" alt="" data-toggle="modal" data-target="#dr_hugo_campos">
            </div>
            <div class="col-md-4 col-sm-4">
                     <img src="imagenes/promociones/laser-vision.png" alt="" data-toggle="modal" data-target="#laser-vision">
            </div>
        </div>
    </div>
</Section>
<!--seccion salud y bienestar-->

<!--seccion viajes y diversion-->
<section id="content-viajes">
        <h2 class="text-center my-5">Viajes y <span>Diversión</span></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                        <img src="imagenes/promociones/ostar.png" alt="" data-toggle="modal" data-target="#ostar">
            </div>
            <div class="col-md-4 col-sm-4">
                         <img src="imagenes/promociones/realdeminasqueretaro.png" alt="" data-toggle="modal" data-target="#realdeminasqueretaro">
            </div>
            <div class="col-md-4 col-sm-4">
                  <img src="imagenes/promociones/sixflags.png" alt="" data-toggle="modal" data-target="#sixflags"> 
            </div>
        </div>
        <div class="row ustify-content-md-center">
            <div class="col-md-6 col-sm-6 col-xs-12">
                 <img src="imagenes/promociones/bioparqueestrella.png" alt="" data-toggle="modal" data-target="#cinemex">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                    <img src="imagenes/promociones/cinemex.png" alt=""data-toggle="modal" data-target="#cinemex">
            </div>
        </div>
    </div>
</section>
<!--seccion viajes y diversion-->

<!--seccion Educacion-->
<section id="content-educacion">
    <h2 class="text-center my-5">Educa<span>ción</span></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                        <img src="imagenes/promociones/papeleriadabo.png" alt="" data-toggle="modal" data-target="#papeleriadabo">
                </div>
                <div class="col-md-4 col-sm-4">
                        <img src="imagenes/promociones/universidadlondres.png" alt=""  data-toggle="modal" data-target="#universidadlondres">
                </div>
                <div class="col-md-4 col-sm-4">
                        <img src="imagenes/promociones/unitec.png" alt=""  data-toggle="modal" data-target="#unitec">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                     <img src="imagenes/promociones/universidaddemexicoyespaña.png" alt="" data-toggle="modal" data-target="#unitec">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src="imagenes/promociones/ICEL.png" alt="" data-toggle="modal" data-target="#ICEL">
                </div>
            </div>
        </div>
    </section>
    <!--seccion viajes y diversion-->

@stop