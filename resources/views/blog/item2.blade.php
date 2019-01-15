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
                        <img src="imagenes/blog/NOTA 2.jpg" alt="">
                    </figure>
                <div class="post-content-text">
                      <ul class="meta">
                          <li class="meta-date">Publicado
                            <a href="#">14 Enero, 2018</a>
                          </li>
                          <li class="meta-category">in
                            <a href="#">Juridico</a>
                          </li>
                      </ul>
                      <h4 class="post-title">
                        <a href="#">En el próximo mes entrará en vigor la actualización de la Unidad de Medida y Actualización.</a>
                      </h4>
                            <p>La Unidad de Medida y Actualización (UMA) se incrementó 4.83% para este 2019, informó Julio Alfonso Santaella, titular del Instituto Nacional de Estadística y Geografía (Inegi). </p>
                            <p>El valor diario de la Unidad de Medida y Actualización equivale a 84.49 pesos; el valor mensual es de 2 mil 568.50 pesos, y el valor anual de 30 mil 822.00 pesos.</p>
                            <p>Recordemos que esta unidad de medida sirve para determinar el monto en el pago de las obligaciones y supuestos previstos en las leyes federales, de las entidades federativas, así como de las disposiciones jurídicas que emanen de todas ellas.</p>
                            <p>La actualización de la UMA es anual, multiplicando el valor de la inmediata anterior por el resultado de la suma de uno más el crecimiento porcentual interanual de diciembre del año anterior del Índice Nacional de Precios al Consumidor (INPC).</p>

                            

                            {{-- 
                                <ul class="contet-descrip">
                                    <li>La obtención de la suspensión de la aplicación de la ley, a efecto de que se continúe aplicando la compensación universal en las contribuciones que se tengan a favor con las que estén a cargo dentro del ejercicio fiscal, independientemente si son distintas entre sí.</li>
                                    <li>Con la obtención de la suspensión de la aplicación de la ley, el contribuyente podrá disponer de flujo de efectivo, sin una erogación adicional para cubrir sus impuestos a cargos, ni tendrá que tramitar la devolución para obtener sus saldos a favor.</li>
                                    <li>Con la obtención de la suspensión de la aplicación de la ley, el contribuyente podrá disponer de flujo de efectivo, sin una erogación adicional para cubrir sus impuestos a cargos, ni tendrá que tramitar la devolución para obtener sus saldos a favor.</li>
                                </ul> --}}
                            <p class="sluck-mobirama">En <a href="/home">MOBIRAMA </a>contamos con los especialistas que aportarán valor tu empresa. </p>
                            <span>Información retomada de: “El Financiero” </span>
                    </div>
                  </div>
                   <a href="/blog" class="btn btn-primary" style="margin-top:20px;">Regresar</a>
            </div>
            <div class="col-md-4 content-categories">
                <div class="title-category">
                    <h1>Categorias</h1>
                </div>
                <ul>
                    <a  href=""><li>Juridico</li></a>
      
                </ul>
            </div>
        </div>
    </div>
</section>
<!--end section of information blog items-->

@endsection
