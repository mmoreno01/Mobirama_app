@extends('layout')

@section('content')
<div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="imagenes/bg_header/nosotros.jpg" uk-img>
  <h1>Contacto</h1>
</div>
<section id="contacto">
        <div class="container">      
                <div class="row">
                        <div class="col-md-8  content-form">
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
