@extends ('layout')

@section ('content')
<section id="content-txt">
   <div class="cont-title">
        <h1 class="text-center my-5">Elaboración de Manuales y <span>Procedimientos para Estaciones de Servicio</span> </h1>
   </div> 
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <p>Optimizar el funcionamiento y desarrollo de una Estación de Servicio a través de Manuales y Procedimientos que evitan o reducen al máximo la improvisación y permiten el establecimiento de criterios dirigidos a corregir las posibles desviaciones o imprevistos que puedan surgir durante la producción.</p>
              <p>Trabajamos estrechamente con nuestros clientes para entender las necesidades del negocio.</p>
              <p>Proporcionamos un amplio análisis sobre riesgos y oportunidades del mercado.</p>
              <p>Aseguramos el crecimiento de los negocios y la rentabilidad de la inversión.</p>
              <p>Asesorías en materia fiscal, contable y jurídica para lograr el financiamiento de proyecto.</p>
            </div>
            <div class="col-md-6 img-right">
                <img src="imagenes/banca_inversion/bancadeI.png" alt="">
            </div>
        </div>
    </div>
</section>

<!--Seccion del banner Magazine-->
<!-- <section class=" parallax my-5 animated fadeIn" id="banner" style="background-image: url(images/servicios/DocEstacionesServ.jpg); background-position:center;background-repeat:no-repeat; background-size:cover;   background-attachment: fixed; ">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="cont-conectate">   
                <p><span>Incrementa la rentabilidad de tu empresa.</span></p>
                <p>Solicita una cotización de nuestros servicios.</p>
                <button class="btn"><a href="http://www.jbglobalgroup.com/" target="_blank">Ver más </a></button> 
        </div>
</section> -->
<!--fin de magazine-->



<!--seccion de iconos-->
<section id="serv-iconos" class="py-5">
    <div class="container">
        <div class="row">
          
            <div class="col-md-4">
                   <img src="imagenes/payroll/nominas.png"  alt="Consultoría en la Administración de Empresas"  data-toggle="modal" data-target="#Mejora">
               <p>Mejora de la satisfacción del consumidor.</p>
            </div>
            <div class="col-md-4">
                   <img src="imagenes/payroll/adnempresarial.png" alt="Asesoría y Planeación Financiera"  data-toggle="modal" data-target="#Estandar">
                <p>Estandarización de actividades.</p>
            </div>
            <div class="col-md-4">
                    <img src="imagenes/payroll/talentoempresarial.png" alt="Gestión Contable" data-toggle="modal" data-target="#Aumento">
                <p>Aumento de la eficiencia y reducción de costes.</p>
            </div>
          
        </div>
        <div class="row">
          
                <div class="col-md-4">
                        <img src="imagenes/payroll/reclutamientomasivo.png" alt="Consultoría en la Administración de Empresas"  data-toggle="modal" data-target="#Potencia"> 
                   <p>Potenciación de la imagen positiva de la Estación de Servicio.</p>
                </div>
                <div class="col-md-4">
                        <img src="imagenes/payroll/talentoejecutivo.png" alt="Asesoría y Planeación Financiera" data-toggle="modal" data-target="#Impulso">
                    <p>Impulso de la motivación de los trabajadores.</p>
                </div>
                <div class="col-md-4">
                    <img src="imagenes/payroll/verificacion.png" alt="Gestión Contable"   data-toggle="modal" data-target="#Trabajo">
                    <p>Trabajo en equipo fortaleciendo el crecimiento en la productividad.</p>
                </div>
              
            </div>
    </div>
</section>
<!--seccion de iconos-->

<!-- Modal -->
<div class="modal fade" id="Mejora" tabindex="-1" role="dialog" aria-labelledby="MejoraLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="MejoraLabel">Mejora de la satisfacción del consumidor</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Posibilitan que las actividades estén enfocadas tanto en las necesidades de los consumidores como en los parámetros de la Estación, permitiendo integrar las demandas de los consumidores, 
                            lo que permitirá que tenga acceso a una mejor oferta y esté más satisfecho</li>
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="Estandar" tabindex="-1" role="dialog" aria-labelledby="EstandarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="EstandarLabel">Estandarización de actividades</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>La Estación de Servicio no solo conseguirá resultados de mayor calidad, 
                            sino que también obtendrá actividades uniformes y estables, al aplicar lineamientos estandarizados</li>
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="Aumento" tabindex="-1" role="dialog" aria-labelledby="AumentoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="AumentoLabel">Aumento de la eficiencia y reducción de costes</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>A través de Manuales y Procedimientos se establecen cuáles son las actividades óptimas para otorgar el servicio de acuerdo a los estándares establecidos,
                            podrá eliminar los pasos innecesarios, 
                           desarrollar una gestión del tiempo más eficiente,
                            detectar las áreas de mejora y reducir los fallos o errores en el servicio,
                            consiguiendo una mayor eficiencia y el ahorro en costes innecesarios
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="Potencia" tabindex="-1" role="dialog" aria-labelledby="PotenciaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="PotenciaLabel">Potenciación de la imagen positiva de la Estación de Servicios</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>El hecho de contar con Manuales y Procedimientos va a favorecer que mejore la reputación de la Estación de Servicio en el mercado y con las Dependencias para dar cumplimiento a la legislación vigente</li>
                </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="Impulso" tabindex="-1" role="dialog" aria-labelledby="ImpulsoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ImpulsoLabel">Impulso de la motivación de los trabajadores</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Integrar a los empleados en el análisis de actividades, para estudiar los aspectos mejorables, hará que se sientan más implicados con los objetivos de la Estación de Servicio. 
                            Además, al conocer en todo momento cómo deben llevar a cabo el trabajo y qué se espera de ellos, les permitirá conseguir los resultados esperados,
                             incrementando su satisfacción</li>     
                </ul>       
            </div>
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="Trabajo" tabindex="-1" role="dialog" aria-labelledby="TrabajoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="TrabajoLabel">Trabajo en equipo fortaleciendo el crecimiento en la productividad</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Dado que cada área o equipo de trabajo es consciente de su papel dentro de la Estación de servicio, la interacción entre los diferentes áreas se agiliza y simplifica,
                            mejorando la satisfacción del consumidor y de las Dependencias correspondientes.
                            Aumentará el uso efectivo del tiempo, la seguridad operativa y el conocimiento profundo de las debilidades y fortalezas )</li>
                </ul>
            </div>
          </div>
        </div>
      </div>

@stop