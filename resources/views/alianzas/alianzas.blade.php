@extends('layout')

@section('content')
<!-- imagen principal -->
    <div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('imagenes/home/alianzas_hand.jpg');">
        <div class="overlay"></div>
        <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 100,0">Alianzas</h1>
    </div>
<!-- fin de la imagen principal -->


    <section id="content-aliances">   
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                        <img src="imagenes/alianzas/Fortia.png" alt="">
                </div>
                <div class="col-md-4">
                        <img src="imagenes/alianzas/softland.png" alt="">
                </div>
                <div class="col-md-4">
                        <img src="imagenes/alianzas/legadmi.png" alt="">
                </div>
            <div class="row">
                <div class="col-md-4">
                            <img src="imagenes/alianzas/central.jpg" alt="">
                </div>
                <div class="col-md-4">
                            <img src="imagenes/alianzas/UCC.png" alt="">
                </div>
                <div class="col-md-4">
                            <img src="imagenes/alianzas/American.png" alt="">
                </div>
            </div>
            </div>
        </div>
</section>
@endsection