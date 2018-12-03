@extends('layout')

@section('content')
<!-- imagen principal -->
    <div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Contacto.jpg');">
        <div class="overlay"></div>
        <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 100,0">Contacto</h1>
    </div>
<!-- fin de la imagen principal -->

<section id="contacto" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s">
        <div class="container">      
                <div class="row">
                        <div class="col-md-8  content-form">
                                 @include('common.success')
                                {!! Form::open(['route' => 'contacto.contacto', 'method' => 'POST' ]) !!}
                                @csrf
                                <div class="row">
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                {!! Form::text('nombre', null, [  'class' => 'form-control inp-text ', 'placeholder' => 'Nombre', 'required'] ) !!}
                                             </div>
                                             <div class="form-group">
                                                {!! Form::email('email', null, [  'class' => 'form-control inp-text', 'placeholder' => 'Correo electrónico', 'required'] ) !!}
                                             </div>
                                             <div class="form-group">
                                                {!! Form::text('telefono', null, [  'class' => 'form-control inp-text', 'placeholder' => 'Teléfono', 'required'] ) !!}
                                             </div>
                                        </div>
                                        <div class="col-lg-6 form-group">
                                                {!! Form::textarea('mensaje', null, [ 'class' => 'form-control style-textarea', 'placeholder' => 'Mensaje', 'required'] ) !!}
                                        </div>    
                                          <div class="col-lg-12 form-group">
                                                {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
                                        </div>    
                                </div>  
                                {!! Form::close() !!}
                        </div> 
                        <div class="col-md-4 d-flex flex-column ass">
                                <div class="content-info">
                                <div class="contact-adress d-flex flex-row">
                                        <div class="icon">
                                                <span><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <div class="contact-details">
                                                <h5>Insurgentes Sur 619</h5>
                                                <p>Col.Nápoles, 03810, CDMX</p>
                                        </div>
                                </div>
                                <div class="contact-adress d-flex flex-row">
                                        <div class="icon">
                                                <span><i class="fas fa-phone"></i></span>
                                        </div>
                                        <div class="contact-details">
                                                <h5> 41 96 30 00</h5>
                                                <p>Lunes a Viernes 9 am a 6 pm</p>
                                        </div>
                                </div>
                                <div class="contact-adress d-flex flex-row">
                                        <div class="icon">
                                                <span><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <div class="contact-details">
                                                <h5>atencionaclientes@mobirama.mx</h5>
                                                <p>Envíanos tu consulta en cualquier momento!</p>
                                        </div>
                                </div>
                                </div>
                        </div>       
                </div>
        </div> 
</section>
@endsection
