@extends('layout')

@section('content')
<!-- imagen principal -->
    <div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('imagenes/home/Certificacion.jpg');">
        <div class="overlay"></div>
        <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 100,0">Certificaciones y Distintivos</h1>
    </div>
<!-- fin de la imagen principal -->

<section id="content-img-certifications">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/home-icons/iso9001.png" width="286px"  height="180px" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">ISO 9001</h5>
                            <p class="card-text">Trabajamos bajo un ambiente laboral de excelencia y sistemas de gestión que aseguran el adecuado cumplimiento de las metas de nuestros clientes.</p>
                            <!-- <a href="newsletter/Mobirama.pdf" class="btn btn-primary"   target="_blank" >Ver más</a> -->
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                    <div class="card">
                            <img src="imagenes/home-icons/GPTW.png" width="286px"  height="180px" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Great Place To Work</h5>
                                    <p class="card-text">Nos ubicamos dentro del grupo de las 100 mejores empresas para trabajar en el país.</p>
                                    <!-- <a href="newsletter/Mobirama.pdf" class="btn btn-primary"   target="_blank" >Ver más</a> -->
                                </div>
                        </div>
            </div>
            <div class="col-md-4">
                    <div class="card">
                            <img src="imagenes/home-icons/Distintivo RH 2018.png" width="286px"  height="180px" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">50 Consultorias</h5>
                                    <p class="card-text">A lo largo de nuestra trayectoria hemos trabajado para las mejores empresas en el país, siendo reconocidos como una de las 50 empresas de consultoría de México.</p>
                                    <!-- <a href="newsletter/Mobirama.pdf" class="btn btn-primary"   target="_blank" >Ver más</a> -->
                                </div>
                        </div>
            </div>
        </div>
    </div>
</section>
@endsection