@extends('layout')

@section('content')
<!-- imagen principal -->
<div class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('imagenes/bg_header/nosotros.jpg');">
    <div class="overlay"></div>
    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 100,0">Integrate a Nuestro Equipo</h1>
</div>
<!-- fin de la imagen principal -->
<section id="ubicacion">
    <div class="container">
        @if(session('info'))
                <div class="alert alert-success" role="alert">
                    {{session('info')}}
                </div>
            @endif   
        <div class="row">
            <div class="col-md-6">
                <h1>POSTÚLATE AHORA</h1>
                    {!! Form::open(['route' => 'contacto.bolsaTrabajo', 'method' => 'POST', 'files' => true ]) !!}
                    @csrf
                      <div class="row">
                          <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    {!! Form::text('nombre', null, [ 'class' => 'form-control', 'placeholder' => 'Nombre', 'required'] ) !!}
                                </div>
                          </div>
                          <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    {!! Form::text('apellido', null, [ 'class' => 'form-control', 'placeholder' => 'Apellidos', 'required'] ) !!}
                                </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::email('correo', null, [ 'class' => 'form-control', 'placeholder' => 'correo', 'required'] ) !!}
                                </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                    {!! Form::tel('telefono', null, [  'class' => 'form-control', 'placeholder' => 'Teléfono', 'required'] ) !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                    {!! Form::number('edad', null, [ 'class' => 'form-control', 'placeholder' => 'Edad', 'required'] ) !!}
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                                    {!! Form::file('image') !!}
                      </div>
                    <div class="form-group">
                                    {!! Form::submit('guardar', ['class' => 'btn btn-primary']) !!}
                    </div>
            {!! Form::close() !!}
            </div>
            <div class="col-md-6">
            <div class="content-title">
                <h2 class="text-center">Nuestras vacantes</h2>
            </div>
    
            @foreach ($vacantes as $vacante)
                <div class="card-header">
                    <h1 class="card-title" style="font-size: 20px;">  {{ $vacante->titulo}} </h1>
                </div>
                <div class="card-body">   
                    <h3 class="" style="font-size: 15px;">Edad  {{ $vacante->edad }}</h3>
       
                    {{ $vacante->descripcion }} 
                    {{ $vacante->experiencia }} 
                </div>


            @endforeach
            <div class="accordion" id="accordionExample">
  
                {{ $vacantes->appends(['sort' => 'votes'])->links() }}
             {{-- {{ $vacantes->links() }} --}}  
            </div>
        </div>
    </div>
</section>

@endsection