@extends('layout')

@section('content')

<!--heder title blog-->
<div class="content-header" style="background-image: url(imagenes/Master-Servicios-assets/Fiscal.jpg);">
    <div class="content-title">
        <h1>Blog </h1>
        <p>nuestras últimas noticias</p>
    </div>
</div>
<!--heder title blog-->

<!-- section of information blog items-->
<section id="content-items">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <!--note one-->   
                <div class="post preview st-1">
                    <figure class="post-thumbnail">
                            <div class="hover">
                                <a href="imagenes/blog/NOTA 1.jpg" class="lightbox-images">
                                    <span class="wicon-iconmonstr-zoom-in-thin"></span>
                                </a>
                            </div>
                                <img src="imagenes/blog/NOTA 1.jpg" alt="">
                    </figure>
                    <div class="post-content">
                        <ul class="meta">
                            <li class="meta-date">Publicado
                                <a href="#">14 Enero, 2019</a>
                            </li>
                            <li class="meta-category">in
                                <a href="#">Juridico</a>
                                {{-- <a href="#">News &amp; Events</a> --}}
                            </li>
                        </ul>
                        <h4 class="post-title">
                            <a href="/itemBlog">Las compañías podrían ver afectado su flujo de capital a raíz de la Eliminación de la Compensación Universal.</a>
                        </h4>
                        <p>El pasado 19 de diciembre, la Cámara de Diputados aprobó la Iniciativa de Ley de Ingresos de la Federación para 2019. </p>
                        <p>
                            <a href="/itemBlog" class="color-link">Leer más
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </p>
                    </div>
                </div>
             <!--note two-->   
                <div class="post preview st-1">
                    <figure class="post-thumbnail">
                            <div class="hover">
                                <a href="imagenes/blog/Nota 2.jpg" class="lightbox-images">
                                    <span class="wicon-iconmonstr-zoom-in-thin"></span>
                                </a>
                            </div>
                                <img src="imagenes/blog/Nota 2.jpg" alt="">
                    </figure>
                    <div class="post-content">
                        <ul class="meta">
                            <li class="meta-date">Publicado
                                <a href="#">14 Enero, 2019</a>
                            </li>
                            <li class="meta-category">in
                                <a href="#">Juridico</a>
                                {{-- <a href="#">News &amp; Events</a> --}}
                            </li>
                        </ul>
                        <h4 class="post-title">
                            <a href="/item2">En el próximo mes entrará en vigor la actualización de la Unidad de Medida y Actualización.</a>
                        </h4>
                        <p>La Unidad de Medida y Actualización (UMA) se incrementó 4.83% para este 2019, informó Julio Alfonso Santaella. </p>
                        <p>
                            <a href="/item2" class="color-link">Leer más
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </p>
                    </div>
                </div>
                <!--note three-->
                <div class="post preview st-1">
                    <figure class="post-thumbnail">
                            <div class="hover">
                                <a href="imagenes/blog/NOTA 3.jpg" class="lightbox-images">
                                    <span class="wicon-iconmonstr-zoom-in-thin"></span>
                                </a>
                            </div>
                                <img src="imagenes/blog/NOTA 3.jpg" alt="">
                    </figure>
                    <div class="post-content">
                        <ul class="meta">
                            <li class="meta-date">Publicado
                                <a href="#">14 Enero, 2019</a>
                            </li>
                            <li class="meta-category">in
                                <a href="#">Jurídico</a>
                                {{-- <a href="#">News &amp; Events</a> --}}
                            </li>
                        </ul>
                        <h4 class="post-title">
                            <a href="/item3">Conoce cómo utilizar de forma correcta el concepto de “pago en una sola exhibición” al momento de emitir tus nuevos CFDIs versión 3.3.</a>
                        </h4>
                        <p>Un problema en la versión 3.3 del CFDI consistía en la imposibilidad de establecer como método de pago. </p>
                        <p>
                            <a href="/item3" class="color-link">Leer más
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </p>
                    </div>
                </div>  
            </div>
            <div class="col-md-4 content-categories">
                <div class="title-category">
                    <h1>Categorías</h1>
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
