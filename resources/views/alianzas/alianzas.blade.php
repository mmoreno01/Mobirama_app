@extends('layout')

@section('content')
<!-- imagen principal -->
    <div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Alianzas.jpg');">
        <div class="overlay"></div>
        <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 100,0">Alianzas</h1>
    </div>
<!-- fin de la imagen principal -->


    <section id="content-aliances" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.5s">   
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 content-soluctions">
                        <img src="imagenes/alianzas/Fortia.png" alt="Mobirama">
                </div>
                <div class="col-sm-4 col-md-4 content-soluctions">
                        <img src="imagenes/alianzas/softland.png" alt="Mobirama">
                </div>
                <div class="col-sm-4 col-md-4 content-soluctions">
                        <img class="img-apdata" src="imagenes/alianzas/apdata.png" alt="Apdta-Mobirama">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4 content-soluctions">
                            <img class="img-uccs" src="imagenes/alianzas/Contadores-Auditores-Consultores-Logo-UCCS.png" alt="Mobirama">
                </div>
                <div class="col-sm-4 col-md-4 content-soluctions">
                            <img src="imagenes/alianzas/UCC.png" alt="Mobirama">
                </div>
                <div class="col-sm-4 col-md-4 content-soluctions">
                            <!-- <img src="imagenes/alianzas/American.png" alt="Mobirama"> -->
                </div>
            </div>
        </div>
</section>
@endsection