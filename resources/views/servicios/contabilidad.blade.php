@extends('layout')

@section('content')
<!--imagen principal-->
<div class="parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s"
    data-wow-delay="1s" uk-parallax="bgy: -200"
    style="background-image: url('imagenes/Master-Servicios-assets/CapitalHumano.webp');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown"
        data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 100,0">CONTABILIDAD</h1>
</div>
<!--fin de imagen principal-->

<section id="slider-aFiscal">
    <div class="container">
        <section class="one-time slider wow fadeInDown" data-sizes="50vw" data-wow-duration="1s"
            data-wow-delay="1.5s">

            <div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12  ">
                        <!-- <h4>CONTABILIDAD</h4> -->
                        <p>Cumplimiento con las disposiciones vigentes en materia de contabilidad (NIF), (USGAAP) y
                            (IFRS).</p>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12  cont-desc-img">
                        <img src="imagenes/a_fiscal/servicios/Cumplimiento (punto1).webp" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12  ">
                        <!-- <h4>CONTABILIDAD</h4> -->
                        <p>Revisión del cálculo y pago de aportaciones de seguridad social: cuotas obrero-patronales de
                            seguridad social del Instituto Mexicano de Seguridad Social (IMSS) e Instituto Del Fondo
                            Nacional de la Vivienda para los Trabajadores (INFONAVIT).</p>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12  cont-desc-img">
                        <img src="imagenes/a_fiscal/servicios/revisión y pago de impuestos (punto 3).webp"
                            class="img-responsive" alt="">
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12  ">
                        <!-- <h4>CONTABILIDAD</h4> -->
                        <p>Revisión del cálculo y pago de impuestos: Impuesto sobre la renta (ISR), Impuesto al valor
                            agregado (IVA), Impuesto especial sobre producción y servicios (IEPS), Impuesto predial,
                            Impuesto sobre nóminas (ISN), así como su presentación.</p>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12  cont-desc-img">
                        <img src="imagenes/a_fiscal/servicios/Revisión y pago de impuestos 2 (punto 3).webp"
                            class="img-responsive" alt="">
                    </div>
                </div>
            </div>


        </section>
    </div>

</section>






@stop