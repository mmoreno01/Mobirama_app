@extends('layout')

@section('content')

<!--heder title blog-->
<div class="content-header">
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
                <div class="post preview st-1">
                    <figure class="post-thumbnail">
                        <div class="hover">
                            <a href="images/big-images/4.jpg" class="lightbox-images">
                                <span class="wicon-iconmonstr-zoom-in-thin"></span>
                            </a>
                        </div>
                        <img src="imagenes/blog/4.jpg" alt="">
                    </figure>
                <div class="post-content">
                      <ul class="meta">
                          <li class="meta-date">Posted on
                            <a href="#">2th May, 2018</a>
                          </li>
                          <li class="meta-category">in
                            <a href="#">News &amp; Events</a>
                          </li>
                      </ul>
                      <h4 class="post-title">
                        <a href="/itemBlog">AMPARO COMPENSACIÓN UNIVERSAL</a>
                      </h4>
                      <p>La compensación universal es el derecho que tienen los contribuyentes de restar las cantidades. </p>
                      <p>
                        <a href="/itemBlog" class="color-link">Leer más
                          <i class="fa fa-long-arrow-right"></i>
                        </a>
                      </p>
                    </div>
                  </div>
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
