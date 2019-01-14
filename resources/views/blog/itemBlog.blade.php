@extends('layout')

@section('content')

<!--heder title blog-->
<div class="content-header">
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
                        <img src="imagenes/blog/4.jpg" alt="">
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
                        <a href="#">AMPARO COMPENSACIÓN UNIVERSAL</a>
                      </h4>
                            <p>Conforme la Ley de Ingresos aprobada por el legislativo, el derecho de los contribuyente a la “Compensación Universal” ha sido derogado. </p>
                            <p>La compensación universal es el derecho que tienen los contribuyentes de restar las cantidades que tengan a su favor en un determinado impuesto federal de las cantidades que deben pagar por adeudos propios o por retención a terceros.</p>
                            <p>La división fiscal de MOBIRAMA cuenta con las bases para concluir que esta derogación es materia de amparo, por lo está a sus órdenes para poder asesorarlo acerca de enfrentar este tema, beneficiándolo con entre otras cosas:</p>
                                <ul class="contet-descrip">
                                    <li>La obtención de la suspensión de la aplicación de la ley, a efecto de que se continúe aplicando la compensación universal en las contribuciones que se tengan a favor con las que estén a cargo dentro del ejercicio fiscal, independientemente si son distintas entre sí.</li>
                                    <li>Con la obtención de la suspensión de la aplicación de la ley, el contribuyente podrá disponer de flujo de efectivo, sin una erogación adicional para cubrir sus impuestos a cargos, ni tendrá que tramitar la devolución para obtener sus saldos a favor.</li>
                                    <li>Con la obtención de la suspensión de la aplicación de la ley, el contribuyente podrá disponer de flujo de efectivo, sin una erogación adicional para cubrir sus impuestos a cargos, ni tendrá que tramitar la devolución para obtener sus saldos a favor.</li>
                                </ul>
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
