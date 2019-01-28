@extends('layout')


@section('content')
<!--heder title blog-->
<div class="content-header" style="background-image: url(imagenes/Master-Servicios-assets/Fiscal.jpg);">
    <div class="content-title">
        <h1>GACETA </h1>
        <!-- <p>nuestras últimas noticias</p> -->
    </div>
</div>
<!--heder title blog-->

<!--section-->
<section id="section-postGaceta">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                  <img src="imagenes/home/Img-Blog.png" class="card-img-top" alt="Mobirama">
                    <div class="card-body">
                        <h5 class="card-title">Gaceta Fiscal</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="http://online.flipbuilder.com/zdih/eequ/" target="_blank" class="btn btn-primary">Leer articulo</a>
                    </div>    
                </div>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</section>
@endsection