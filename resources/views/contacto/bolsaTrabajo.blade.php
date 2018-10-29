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
        <div class="row">
            <div class="col-md-6">
                <h1>POSTÚLATE AHORA</h1>
                  <form method="POST" action"">
                      <div class="row">
                          <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="titulo" value="" placeholder="Nombre">
                                </div>
                          </div>
                          <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="titulo" value="" placeholder="Apellidos"> 
                                </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="edad" value="" placeholder="Correo">
                                </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="experiencia" value="" placeholder="Teléfono"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="experiencia" value="" placeholder="Edad"></textarea>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                            <label for="experiencia">Adjunta tu CV</label>
                            <input type="file" class="form-control" name="experiencia" value=""></textarea>
                      </div>
                    <div class="form-group">
                            <button class="btn btn-success  w-100">Enviar solicitud</button>
                    </div>
            </form>
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
                    {{-- {!! Form::open(['route' => 'contacto.bolsaTrabajo', 'method' => 'POST', 'files' => 'true']) !!}
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            {!! form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']); !!}
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            {!! form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']); !!}
                        </div>
                    </div>
                <div>
                <div class="row">
                    <div class="col-md-12">
                         <div class="form-group">
                            {!! form::text('mail', null, ['class' => 'form-control', 'placeholder' => 'Correo Electronico']); !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            {!! form::text('mail', null, ['class' => 'form-control', 'placeholder' => 'Correo Electronico']); !!}
                        </div>
                    </div>
                </div>
                    {!! Form::close() !!} --}}

                    
            </div>
        </div>
    </div>
</section>

@endsection