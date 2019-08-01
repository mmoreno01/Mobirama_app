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
                    @include('common.errorSend')
                    @include('common.success')
                <h1>POSTÚLATE AHORA</h1>

                <form action="contacto.bolsaTrabajo" method="POST">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input  type="text" class="form-control"  name="nombre"  placeholder="Nombres">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input  type="text" class="form-control" name="apellido"  placeholder="Apellidos">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  name="correo"  placeholder="Correo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="telefono"  placeholder="Teléfono">
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Vacantes</label>
                                        <select name="vacante_id" id="inputVacante" class="form-control">
                                            <option>-- Elegi vacante --</option>
                                            @foreach ($vacantes as $vacante)
                                                <option value="{{ $vacante['id'] }}">{{ $vacante['titulo'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Área de Interes</label>
                                            <select name="vacante_id" id="inputVacante" class="form-control">
                                                    <option>-- Elegir Area --</option>
                                                    @foreach ($areas as $area)
                                                        <option value="{{ $area['id'] }}">{{ $area['area'] }}</option>
                                                    @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 p-3">
                                        <input type="file">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    {{-- <formvacante-component></formvacante-component> --}}
                    {{-- {!! Form::open(['route' => 'contacto.bolsaTrabajo', 'method' => 'POST', 'files' => true ]) !!}
                    @csrf
                      <div class="row">
                          <div class="col-md-6 col-sm-12 p-3">
                                <div class="form-group">
                                    {!! Form::text('nombre', null, [ 'class' => 'form-control',  name=""' placeholder' => 'Nombre'] ) !!}
                                    {!! $errors->first('nombre', '<span class="help-block alert-danger">:message</span>') !!}
                                </div>
                          </div>
                          <div class="col-md-6 col-sm-12 p-3">
                                <div class="form-group">
                                    {!! Form::text('apellido', null, [ 'class' => 'form-control', 'placeholder' => 'Apellidos'] ) !!}
                                    {!! $errors->first('apellido', '<span class="help-block alert-danger">:message</span>') !!}
                                </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 col-sm-12 p-3">
                                <div class="form-group">
                                    {!! Form::email('correo', null, [ 'class' => 'form-control', 'placeholder' => 'Correo'] ) !!}
                                    {!! $errors->first('correo', '<span class="help-block alert-danger">:message</span>') !!}
                                </div>
                          </div>
                          <div class="col-md-6 col-sm-12 p-3">
                                <div class="form-group">
                                        {!! Form::tel('telefono', null, [  'class' => 'form-control', 'placeholder' => 'Teléfono'] ) !!}
                                        {!! $errors->first('telefono', '<span class="help-block alert-danger">:message</span>') !!}
                                </div>
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-md-12 col-sm-12 p-3">
                                <div class="form-group">
                                        {{!! Form::label('vacante') !!}}
                                        {{!! Form::select('vacante', $vacantes, null, ['class'=> 'form-control']) !!}}
                                        {!! $errors->first('edad', '<span class="help-block alert-danger">:message</span>') !!}
                                </div>
                            </div>
                      </div>
                      <div class="form-group">
                                {!! Form::label('*Añadir CV.', null, ['class' => 'control-label form-group'] )!!}
                                {!! Form::file('image') !!}
                                {!! $errors->first('image', '<span class="help-block alert-danger">:message</span>') !!}

                      </div>
                    <div class="form-group">
                                    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!} --}}
            </div>{{-- end col-6 --}}
            
            <div class="col-sm-12 col-md-12 col-lg-6 content-vacantesVierw">
                <div class="content-title">
                    <h2 class="">Nuestras vacantes</h2>
                </div>
        
                @foreach ($vacantes as $vacante)
                <a href="/contacto/vacante/{{$vacante->id}}">
                    <div class="card">  
                        <h1 class="card-header">{{ $vacante->titulo}} </h1>
                        <div class="card-body">   
                                <h2 class="card-title">descripcion </h2>
                                <p class="card-description"> {!! str_limit($vacante->descripcion, 150, '...')   !!} </p>
                        </div>
                    </div>
                </a>
                @endforeach
                {{-- {{ $vacantes->appends(['sort' => 'votes'])->links() }} --}}
                {{ $vacantes->links() }}  
            </div>{{-- end col-6 --}}
        </div>{{-- end row --}}
    </div>{{-- end container --}}
</section>

@endsection