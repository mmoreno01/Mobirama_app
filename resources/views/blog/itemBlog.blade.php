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
                        <img src="imagenes/blog/NOTA 1.jpg" alt="">
                    </figure>
                <div class="post-content-text">
                      <ul class="meta">
                          <li class="meta-date">Publicado
                            <a href="#">14 Enero, 2018</a>
                          </li>
                          <li class="meta-category">
                            <a href="#">Juridico</a>
                          </li>
                      </ul>
                      <h4 class="post-title">
                        <a href="#">Las compañías podrían ver afectado su flujo de capital a raíz de la Eliminación de la Compensación Universal.</a>
                      </h4>
                            <p>El pasado 19 de diciembre, la Cámara de Diputados aprobó la Iniciativa de Ley de Ingresos de la Federación para 2019. Ésta incluye algunos cambios importantes, como la eliminación de Compensación Universal de Impuestos, facilidad administrativa que permitía restar un saldo a favor que se tenga por concepto de un impuesto federal a lo que se deba por concepto de otro. </p>
                            <p>La facilidad podría ser eliminada porque la Secretaría de Hacienda y Crédito Público (SHCP) observó que algunos contribuyentes abusaban de la misma para evadir impuestos. En la forma en que está establecida la facilidad, los contribuyentes pueden realizar la compensación automáticamente, sin tener que pedirle permiso a la autoridad. Esto permitía que los contribuyentes pudieran deducir saldos a favor indebidos, incluso fabricados mediante la facturación de actividades inexistentes. </p>
                            <p>Sin embargo, como es comprensible, no sólo los evasores se valían de esta facilidad administrativa. También hay contribuyentes con actividades económicas legítimas que hacían uso de ella. Por ello se plantea que el Servicio de Administración Tributaria introduzca una serie de reglas con la finalidad de proteger a éstos contribuyentes.
“Los empresarios del sector primario, los exportadores, empresarios de la industria manufacturera, los que tienen tasa cero de IVA, pues van a ser protegidos. En los próximos días el SAT tendrá que definir las reglas”, mencionó el presidente de la Comisión de Presupuesto y Cuenta Pública, Alfonso Ramírez Cuéllar.
{{-- </p>
                                <ul class="contet-descrip">
                                    <li>La obtención de la suspensión de la aplicación de la ley, a efecto de que se continúe aplicando la compensación universal en las contribuciones que se tengan a favor con las que estén a cargo dentro del ejercicio fiscal, independientemente si son distintas entre sí.</li>
                                    <li>Con la obtención de la suspensión de la aplicación de la ley, el contribuyente podrá disponer de flujo de efectivo, sin una erogación adicional para cubrir sus impuestos a cargos, ni tendrá que tramitar la devolución para obtener sus saldos a favor.</li>
                                    <li>Con la obtención de la suspensión de la aplicación de la ley, el contribuyente podrá disponer de flujo de efectivo, sin una erogación adicional para cubrir sus impuestos a cargos, ni tendrá que tramitar la devolución para obtener sus saldos a favor.</li>
                                </ul> --}}
                            <p class="sluck-mobirama">En <a href="/home">MOBIRAMA </a>contamos con los especialistas que aportarán valor tu empresa. </p>
                            <span>Información retomada de: “El Universal Online”.</span>
                    </div>
                  </div>
                   <a href="/blog" class="btn btn-primary" style="margin-top:20px;">Regresar</a>
            </div>
            <div class="col-md-4 content-categories">
                <div class="title-category">
                    <h1>Categorias</h1>
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
