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
                        <img src="imagenes/blog/NOTA 3.jpg" alt="">
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
                        <a href="#">Conoce cómo utilizar de forma correcta el concepto de “pago en una sola exhibición” al momento de emitir tus nuevos CFDIs versión 3.3.</a>
                      </h4>
                            <p>Un problema en la versión 3.3 del CFDI consistía en la imposibilidad de establecer como método de pago: Pago en una sola Exhibición (PUE) si éste no se efectuaba exclusivamente al contado y al momento de emitir el comprobante; lo anterior, no obstante que el pago fuese realizado días después, inclusive en una sola exhibición. </p>
                            <p>Por lo que el Sistema de Administración Tributaria  publicó en sus sitio web, la utilización obligatoria del complemento de pago, la Tercera Resolución de Modificaciones a la RMF para 2018 y sus Anexos 1-A y 23, por medio de la cual adiciona la regla 2.7.1.44, la cual modifica la utilización del método de pago: PUE, pudiendo ahora señalar dicho método, incluso si el pago no ha sido efectuado de forma total al expedirse el CFDI, siempre y cuando se cumpla con lo siguiente:</p>
                       
                                <ul class="contet-descrip">
                                    <li>Se estime que el monto total que ampare el CFDI se recibirá a más tardar el día 17 del mes inmediato posterior al cual se expidió el CFDI.</li>
                                    <li>Señalar en el comprobante como método de pago “PUE”  y la forma en que se recibirá el pago.</li>
                                    <li>La totalidad del pago que ampare el CFDI en cuestión, debe ser realizada en la fecha acordada, es decir, a más tardar el 17 del mes inmediato posterior al en que se emitió el comprobante.</li>
                                </ul> 
                            <p>Además, se debe considerar lo siguiente:</p>
                              <ul class="contet-descrip-number">
                                    <li>Se estime que el monto total que ampare el CFDI se recibirá a más tardar el día 17 del mes inmediato posterior al cual se expidió el CFDI.</li>
                                    <li>Señalar en el comprobante como método de pago “PUE”  y la forma en que se recibirá el pago.</li>
                                    <li>La totalidad del pago que ampare el CFDI en cuestión, debe ser realizada en la fecha acordada, es decir, a más tardar el 17 del mes inmediato posterior al en que se emitió el comprobante.</li>
                                </ul> 

                            <p class="sluck-mobirama">En <a href="/home">MOBIRAMA </a>contamos con los especialistas que aportarán valor tu empresa. </p>
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
