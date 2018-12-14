@extends('layout')

@section('content')
<!-- imagen principal -->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Bolsa-Trabajo.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 100,0">Integrate a Nuestro Equipo</h1>
</div>
<!-- fin de la imagen principal -->
<section id="Form-contact" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 form-postulation">
                {{-- @include('common.errors')
                @include('common.success') --}}
                <h1>POSTÚLATE AHORA</h1>
                    {!! Form::open(['route' => 'contacto.bolsaTrabajo', 'method' => 'POST', 'files' => true ]) !!}
                    @csrf
                      <div class="row">
                          <div class="col-md-6 col-sm-12 p-3">
                                <div class="form-group">
                                    {!! Form::text('nombre', null, [ 'class' => 'form-control', 'placeholder' => 'Nombre'] ) !!}
                                    {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                                </div>
                          </div>
                          <div class="col-md-6 col-sm-12 p-3">
                                <div class="form-group">
                                    {!! Form::text('apellido', null, [ 'class' => 'form-control', 'placeholder' => 'Apellidos'] ) !!}
                                    {!! $errors->first('apellido', '<span class="help-block">:message</span>') !!}
                                </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12 p-3">
                                <div class="form-group">
                                    {!! Form::email('correo', null, [ 'class' => 'form-control', 'placeholder' => 'Correo'] ) !!}
                                    {!! $errors->first('correo', '<span class="help-block">:message</span>') !!}
                                </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-12 p-3">
                            <div class="form-group">
                                    {!! Form::tel('telefono', null, [  'class' => 'form-control', 'placeholder' => 'Teléfono'] ) !!}
                                    {!! $errors->first('telefono', '<span class="help-block">:message</span>') !!}

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 p-3">
                            <div class="form-group">
                                    {!! Form::number('edad', null, [ 'class' => 'form-control', 'placeholder' => 'Edad'] ) !!}
                                    {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}

                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                                {!! Form::label('*Añadir CV.', null, ['class' => 'control-label form-group'] )!!}
                                {!! Form::file('image') !!}
                                {!! $errors->first('image', '<span class="help-block">:message</span>') !!}

                      </div>
                    <div class="form-group">
                                    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
            </div>{{-- end col-6 --}}
            
            <div class="col-sm-12 col-md-12 col-lg-6 content-vacantesVierw">
                <div class="content-title">
                    <h2 class="">Nuestras vacantes</h2>
                </div>
        
                @foreach ($vacantes as $vacante)
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 20px;">  {{ $vacante->titulo}} </h1>
                    </div>
                    <div class="card-body">   
                        <h3 style="font-weight: bold; text-transform: uppercase; font-size: 15px; margin-top: 0px; margin:0px;">Edad </h3>
                                <p style="margin: 10px 0px;"> {{ $vacante->edad }}</p>
                        <h3 style="font-weight: bold; text-transform: uppercase; font-size: 15px; margin-top: 0px; margin:0px;">descripcion </h3>
                                <p style="margin: 10px 0px;"> {{ $vacante->descripcion }} </p>
                        <h3 style="font-weight: bold; text-transform: uppercase; font-size: 15px; margin-top: 0px; margin:0px;">experiencia </h3>
                                <p style="margin: 10px 0px;"> {{ $vacante->experiencia }} </p>
                    </div>
                @endforeach
                {{-- {{ $vacantes->appends(['sort' => 'votes'])->links() }} --}}
                {{ $vacantes->links() }}  
            </div>{{-- end col-6 --}}
        </div>{{-- end row --}}
    </div>{{-- end container --}}
</section>

@endsection