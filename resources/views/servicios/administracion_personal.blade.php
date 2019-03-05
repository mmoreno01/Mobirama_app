@extends('layout')

@section('content')
<!--imagen principal-->
<div class="parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/CapitalHumano.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 100,0">Administración de personal</h1>
</div>
<!--fin de imagen principal-->


<section id="content-txt">
      <div class="container">
        <div class="row">
            <div class="col-12 text-left wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s">
              <p class="sub-title text-center">Damos valor a su empresa al proporcionar un capital humano altamente efectivo y dispuesto a lograr los objetivos organizacionales.</p>  
              <p> Nuestra visión estratégica de soluciones, destinada a la organización y aprovechamiento de los recursos humanos, permite a las empresas laborar bajo un alto grado de efectividad y óptimos resultados incrementando su competitividad dentro del mercado.</p>
              
              <ul>
                  <li>Procesos efectivos y confiables</li>
                  <li>Equipo de profesionistas con experiencia y compromiso</li>
                  <li>Evaluación continua en cada proceso</li>
                  <li>Constante actualización de método</li>
              </ul>  
              <a href="/#content_services">Más Servicios</a> 
            </div>
        </div>
        <div class="row serv-iconos">
           
                <div id="owl-two" class=" owl-carousel">
                        <div class="">
                                <img src="imagenes/capital_humano/reclut.png" alt="Consultoría en la Administración de Empresas"  data-toggle="modal" data-target="#Rpuro">
                                <p>Reclutamiento Puro</p>
                        </div>
                        <div class="">
                                <img src="imagenes/capital_humano/talento.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#talento">
                                <p>Búsqueda de Talento Ejecutivo</p>
                        </div>
                        <div class="">
                                <img src="imagenes/capital_humano/est-veri.png" alt="Gestión Contable"  data-toggle="modal" data-target="#verifica">
                                <p>Estudios de Verificación de Datos</p>
                        </div>
                        <div class="">
                                <img src="imagenes/capital_humano/documentacion proceso.png" alt="Gestión Contable"  data-toggle="modal" data-target="#DocProce">
                                <p>Documentación de Procesos</p>
                        </div>
                        <div class="">
                                <img src="imagenes/capital_humano/perfil de puesto.png" alt="Gestión Contable"  data-toggle="modal" data-target="#perPuesto">
                                <p>Perfiles de Puesto</p>
                        </div>
                        <div class="">
                                <img src="imagenes/capital_humano/analisis de sueldo.png" alt="Gestión Contable"  data-toggle="modal" data-target="#asueldo">
                                <p>Análisis de Sueldo</p>
                        </div>
                        <div class="">
                                <img src="imagenes/capital_humano/talento.png" alt="Gestión Contable"  data-toggle="modal" data-target="#atalento">
                                <p>Atracción de Talento</p>
                        </div>
                        <div class="">
                                <img src="imagenes/capital_humano/headhunting.png" alt="Gestión Contable"  data-toggle="modal" data-target="#head">
                                <p>Headhunting</p>
                        </div>
                        <div class="">
                                <img src="imagenes/capital_humano/estudio socioeco.png" alt="Gestión Contable"  data-toggle="modal" data-target="#estSocio">
                                <p>Estudio Socioeconómico</p>
                        </div>
                        <div class="">
                                <img src="imagenes/capital_humano/reclutamiento adm.png" alt="Gestión Contable"  data-toggle="modal" data-target="#recAdm">
                                <p>Reclutamiento Administrado</p>
                        </div>
                        <div class="">
                                <img src="imagenes/capital_humano/desarollo organizacional.png" alt="Gestión Contable"  data-toggle="modal" data-target="#desOrg">
                                <p>Desarrollo Organizacional</p>
                        </div>
                        <div class="">
                                <img src="imagenes/capital_humano/bienestar.png" alt="Gestión Contable"  data-toggle="modal" data-target="#bienSalud">
                                <p>Bienestar y salud </p>
                        </div>
                        <div class="">
                                <img src="imagenes/capital_humano/onboarding.png" alt="onboarding"  data-toggle="modal" data-target="#Onboarding">
                                <p>Onboarding </p>
                        </div>
                    </div>
                
           {{-- <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
                   <img src="imagenes/capital_humano/reclut.png" alt="Consultoría en la Administración de Empresas"  data-toggle="modal" data-target="#Rpuro">
                  
              <p>Reclutamiento Puro</p>
           </div>
           <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                   <img src="imagenes/capital_humano/talento.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#talento">
               <p>Búsqueda de Talento Ejecutivo</p>
           </div>
           <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s" data-toggle="modal" data-target="#verifica">
               <img src="imagenes/capital_humano/est-veri.png" alt="Gestión Contable">
               <p>Estudios de Verificación de Datos</p>
           </div> --}}
          
       </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="Rpuro" tabindex="-1" role="dialog" aria-labelledby="RpuroLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="RpuroLabel">Reclutamiento Puro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Estamos comprometidos con nuestros clientes para asegurar que cada uno de sus proyectos dispongan del mejor talento que genere impacto significativo en la eficiencia, productividad y éxito de su empresa. </li> 
                </ul>
            </div>
          </div>
        </div>
</div>


<!-- Modal -->
<div class="modal fade" id="talento" tabindex="-1" role="dialog" aria-labelledby="talentoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="talentoLabel">Búsqueda de Talento Ejecutivo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Realizamos una búsqueda del candidato ideal, a través de procedimientos especializados y evaluaciones, que nos determinan cuáles son los candidatos más aptos para los diferentes  puestos que requiera su empresa.</li>
                </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="verifica" tabindex="-1" role="dialog" aria-labelledby="verificaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="verificaLabel">Estudios de Verificación de Datos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Nos encargamos de verificar tanto los documentos personales como la identidad de los empleados potenciales para ser evaluados en los procesos de reclutamiento y selección.</li>
                </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="DocProce" tabindex="-1" role="dialog" aria-labelledby="DocProceLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="DocProceLabel">Documentación de Procesos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Se realiza a través de entrevistas con cada uno de los recursos involucrados en el sistema de las empresas, creamos procedimientos por funciones, 
                        los cuales incluyen los objetivos de los mismos, su alcance, los responsables, diagrama de flujo de los procesos, entre otros entregables. </li>
                </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="perPuesto" tabindex="-1" role="dialog" aria-labelledby="perPuestoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="perPuestoLabel">Perfiles de Puesto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>Basados en las observaciones anteriores, nuestros expertos levantan información que incluye descripciones a nivel de :</p>
                <ul>
                    <li>Objetivos / Autoridad</li>
                    <li>Funciones/Actividades específicas/Responsabilidades</li>
                    <li>Niveles de experiencia requeridos para cubrir los dos puntos anteriores</li>
                    <li>Background educativo – skill técnicos y de formación profesional con grados y niveles de experiencia</li>
                    <li>Perfiles sociales</li>
                    <li>Entre otros</li>
                </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="asueldo" tabindex="-1" role="dialog" aria-labelledby="asueldoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="asueldoLabel">Análisis de Sueldo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>Es un servicio de información y consultoría experta en administración de sueldos, en el cual se analizan todos los componentes de la retribución. Actualizamos constantemente nuestro banco de datos mediante una encuesta salarial para generar reportes generales, sectoriales y regionales.</p>
               <p>Elaboramos estudios de compensaciones, basados en una constante actualización de la información de las remuneraciones en niveles de puestos de las organizaciones</p>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="atalento" tabindex="-1" role="dialog" aria-labelledby="atalentoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="atalentoLabel">Atracción de Talento</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>Contamos con la experiencia y los recursos para localizar a la persona que su organización requiere a cualquier nivel, 
                    para lo cual llevamos a cabo análisis de perfiles y una revisión y asesoría del perfil del candidato e investigación de las condiciones laborales acordes al mercado.</p>
                    <ul>
                        <li>Reclutamiento: Contamos con cartera de candidatos propia, reclutamiento predictivo y red empresarial.</li>
                        <li>Procesos de selección completos con entrevistas personalizadas, exámenes psicométricos o evaluaciones especializadas.</li>
                        <li>Colocación en su caso de implants de RyS acorde a las necesidades del cliente</li>
                    </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="head" tabindex="-1" role="dialog" aria-labelledby="headLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="headLabel">Headhunting</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>Ofrecemos una gama completa de soluciones basadas en la investigación del entorno actual y las mejores prácticas del mercado nacional e internacional.
                    Nuestros servicios de búsqueda de CEO y planificación de sucesiones, identifican el perfil ideal para la estrategia de la organización. Evaluamos a los candidatos y los comparamos con los mejores CEOs, 
                    basados en una metodología de investigación sobre rasgos que se correlacionan con el éxito; esto nos permite identificar CEOs a corto plazo que se alinean con los objetivos estratégicos y las perspectivas a largo plazo de las empresas.</p>
                <p>Llevamos a cabo los siguientes pasos:</p>
                    <ul>
                        <li>Exámenes técnicos especializados</li>
                        <li>Revisión y clasificación de curricula</li>
                        <li>Entrevista personalizada por competencias</li>
                        <li>Análisis de perfiles</li>
                        <li>Análisis psicométricos</li>
                        <li>Referencias laborales</li>
                    </ul>
            </div>
          </div>
        </div>
</div>


<!-- Modal -->
<div class="modal fade" id="estSocio" tabindex="-1" role="dialog" aria-labelledby="estSocioLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="estSocioLabel">Estudio Socioeconómico</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>Nuestra firma se centra en la optimización de los recursos disponibles y la creación de valor a través del aumento de la rentabilidad de nuestros clientes, 
                    para lo cual contamos con productos que se adaptan a sus necesidades:</p>
                    <ul>
                        <li>Estudios de gabinete: Incluye la investigación con las referencias laborales y personales</li>
                        <li>Cotizaciones ante el IMSS</li>
                        <li>Buró laboral e investigación de incidencias legales.</li>
                        <li>Social media search: Su objetivo es analizar el comportamiento de candidatos en diferentes redes sociales (previa autorización del candidato)</li>
                        <li>Polígrafo</li>
                        <li>Alcance nacional</li>
                    </ul>
            </div>
          </div>
        </div>
</div>


<!-- Modal -->
<div class="modal fade" id="recAdm" tabindex="-1" role="dialog" aria-labelledby="recAdmLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="recAdmLabel">Reclutamiento Administrado</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>Es un servicio que externaliza el proceso de selección, donde consolidamos sus objetivos y necesidades, sumando los mismos a nuestros esquemas de Tercerización de Nominas, quedando bajo nuestro control el proceso punta a punta, pudiendo así ofrecer un servicio de máxima calidad y dejando que el cliente se enfoque en su “Core Business”
                        El Objetivo Final del RPO es reducción de costos a través de riesgo compartido, acelerando el tiempo de contratación y generar procesos óptimos. Un RPO ayudará a examinar los flujos de trabajo de su proceso de reclutamiento para determinar dónde pueden existir prácticas superpuestas o costos excesivos o innecesarios.
                        </p>
                        <p>El Objetivo Final del RPO es reducción de costos a través de riesgo compartido, acelerando el tiempo de contratación y generar procesos óptimos. Un RPO ayudará a examinar los flujos de trabajo de su proceso de reclutamiento para determinar dónde pueden existir prácticas superpuestas o costos excesivos o innecesarios.</p>
                   
            </div>
          </div>
        </div>
</div>


<!-- Modal -->
<div class="modal fade" id="desOrg" tabindex="-1" role="dialog" aria-labelledby="desOrgLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="desOrgLabel">Desarrollo Organizacional </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>(Desempeño + Clima Laboral + Plan de Carrera + Capacitación)
                        El objetivo de nuestra consultoría, es promover los procesos de cambio en las empresas, alineando este con su objetivo y misión aunado a modificaciones en los temas de cultura y desempeño en la organización
                        Nuestra metodología apoya al mejoramiento de las habilidades, el conocimiento y la efectividad individual de una empresa en términos de todos sus objetivos.
                        La cobertura de nuestros servicios abarca los siguientes aspectos:
                        </p> 
            <ul>
                <li>Análisis y evaluación de desempeño</li>
                <li>Clima laboral</li>
                <li>Planes de carrera</li>
            </ul>
            </div>
          </div>
        </div>
</div>


<!-- Modal -->
<div class="modal fade" id="bienSalud" tabindex="-1" role="dialog" aria-labelledby="bienSaludLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="bienSaludLabel">Bienestar y salud </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <p>El objetivo de esta práctica es acompañar a los colaboradores de la empresa hacia estados de bienestar, que les permitan tener una mejor calidad de vida a lo largo de las horas que habitan en las organizaciones.</p>
               <p>Nuestro servicio se presenta en tres modalidades las cuales pueden trabajar de forma conjunta o individuales:</p> 
            <ul>
                <li>1.-Servicio de Psicología</li>
                <li>2.-Servicio Médico</li>
                <li>3.-Servicio de Nutrición</li>
            </ul>
            </div>
          </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Onboarding" tabindex="-1" role="dialog" aria-labelledby="OnboardingLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="OnboardingLabel">Onboarding </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>El proceso de onboarding (o inducción de personal) se ha convertido en una de las prioridades para los expertos de recursos humanos.
                        Las empresas se han concluido no se puede dejar a los nuevos empleados a su suerte y que es necesario preparar su llegada para que comprendan el funcionamiento de la compañía, conozcan a sus compañeros y se familiaricen con su lugar de trabajo.
                        El objetivo es claro: simplemente busca que los recién llegados se sientan cómodos en sus primeros días, puedan comenzar a ser productivos cuanto antes y decidan quedarse en la empresa.
                        </p> 
                        <p>La metodología MOBIRAMA acota un proceso de cuatro pasos:</p>           
                <ul>
                <li>1. Antes del onboarding: el pre-onboarding</li>
                <li>2. Proceso de onboarding: el primer día de trabajo</li>
                <li>3. Proceso de onboarding: la primera semana</li>
                <li>4. El onboarding continúo</li>
            </ul>
            </div>
          </div>
        </div>
</div>









@stop