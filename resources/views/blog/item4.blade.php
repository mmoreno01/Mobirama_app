@extends('layout')

@section('content')

<!--heder title blog-->
<div class="content-header" style="background-image: url(imagenes/Master-Servicios-assets/Fiscal.jpg);">
    <div class="content-title">
        <h1> Blog </h1>
        <p>nuestras últimas noticias</p>
    </div>
</div>
<!--heder title blog-->

<!-- section of information blog items-->
<section id="content-items-general">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="post preview st-1">
                    <figure class="post-thumbnail">
                        <div class="hover">
                            <a href="images/big-images/4.jpg" class="lightbox-images">
                                <span class="wicon-iconmonstr-zoom-in-thin"></span>
                            </a>
                        </div>
                        <img src="imagenes/blog/NOTA 4.jpg" alt="">
                    </figure>
                <div class="post-content-text">
                      <ul class="meta">
                          <li class="meta-date">Publicado
                            <a href="#">30 Enero, 2018</a>
                          </li>
                          <li class="meta-category">in
                            <a href="#">Juridico</a>
                          </li>
                      </ul>
                      <h4 class="post-title">
                        <a href="#">IVA: Aviso para aplicar el estímulo fiscal de IVA en la región fronteriza norte.</a>
                      </h4>
                            <p><span class="f-bold">REQUISITOS PARA ANTES DE PRESENTAR TU AVISO DE APLICACIÓN DEL ESTÍMULO DEL IVA</span></p>
                            <p>De conformidad con el Decreto de estímulos fiscales región fronteriza norte, publicado en el Diario Oficial de la Federación el 31 de diciembre de 2018, te invitamos a conocer los requisitos que debes cubrir antes de presentar tu aviso. </p>
                       
                                <ul class="contet-descrip">
                                    <li><span class="f-bold">Estar activo.</span><br> Esta información la puedes consultar en el Portal del SAT con tu Contraseña, en el siguiente enlace: https://bit.ly/2MLAFHQ</li>
                                    <li><span class="f-bold">Contar con e.firma.</span><br> Si aún no cuentas con ella la puedes obtener o renovar ingresando a:  https://bit.ly/1J2bb2F</li>
                                    <li><span class="f-bold">Contar con Contraseña.</span><br> La puedes generar en el Portal del SAT, siempre que cuentes con tu e.firma desde: https://bit.ly/2ntqxFx</li>
                                    <li><span class="f-bold">No encontrarse en los supuestos del artículo 69 ni 69-B. </span><br> Esta información la puedes consultar en la siguiente ruta: <br> Portal del SAT / Personas o Empresas / Otros trámites y servicios /Consultar/ Opciones: </li>
                                </ul> 
                                <ul class="style-none">
                                    <li>Consulta la publicación de la relación de los contribuyentes no localizados.</li>
                                    <li>Consulta la relación de contribuyentes con operaciones presuntamente inexistentes.</li>
                                    <li>Consulta la relación de contribuyentes incumplidos.</li>
                                    <li>Consulta la relación de contribuyentes que desvirtuaron la presunción de inexistencia de operaciones.</li>
                                    <li>Consulta la relación de contribuyentes que obtuvieron algún medio defensa favorable.</li>
                                    <li>Consulta la relación de contribuyentes que realizan operaciones inexistentes.</li>
                                </ul> 
                                
                            <p><span class="f-bold">Si eres persona moral:<br> Si eres socios o accionistas registrados y no te encuentras en los supuestos del 69 B. </span></p>
                            <p>Esta información la puedes consultar en la siguiente ruta:<br> Portal del SAT / Personas o Empresas / Otros trámites y servicios /Consultar/ Opciones: </p>

                              <ul class="style-none">
                                    <li>Consulta la relación de contribuyentes con operaciones presuntamente inexistentes.</li>
                                    <li>Consulta la relación de contribuyentes que desvirtuaron la presunción de inexistencia de operaciones.</li>
                                    <li>Consulta la relación de contribuyentes que obtuvieron algún medio defensa favorable.</li>
                                    <li>Consulta la relación de contribuyentes que realizan operaciones inexistentes.</li>
                                </ul> 

                            <p class="sluck-mobirama">En <a href="/">MOBIRAMA </a>contamos con los especialistas que aportarán valor tu empresa. </p>
                            <span>Información retomada de: “SAT”.</span>
                    </div>
                  </div>
                   <a href="/blog" class="btn btn-primary" style="margin-top:20px;">Regresar</a>
            </div>
            <div class="col-md-4 content-categories">
                <div class="title-category">
                    <h1>Categorías</h1>
                </div>
                <ul>
                    <a  href=""><li>Juridíco</li></a>
      
                </ul>
            </div>
        </div>
    </div>
</section>
<!--end section of information blog items-->

@endsection
