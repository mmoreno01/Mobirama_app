@extends('layout')

@section('content')

{{-- seccion de card de identificacion de administrador --}}
<section id="content-dashboard">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Bienvenido {{ auth()->user()->name }}</h1>
                        <h2 class="card-title">Email: {{ auth()->user()->email }}</h2>
                        <form  method="POST" action="{{ route('logout') }}">
                                {{csrf_field()}}
                                <button class="btn btn-danger">Cerrar sesion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- fin seccion de card de identificacion de administrador --}}

{{-- seccion de alta de vacante, edicion y eluminacion --}}
<section id="form_vacante">
    <div class="container">
        <form method="POST" action="{{ route('dashboard') }}">
        {{csrf_field()}}
            <div class="row">
                <div class="col-md-6"> 
                                <h3 class="text-center">Crea una nueva vacante</h3>

                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" class="form-control" name="titulo">
                        </div>
                        <div class="form-group">
                            <label for="">Edad</label>
                            <input type="text" class="form-control" name="edad">
                        </div>
                        <div class="form-group">
                            <label for="">Estudios</label>
                            <textarea type="text" class="form-control" name="descripcion"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Experiencia Laboral</label>
                            <textarea type="text" class="form-control" name="experiencia"></textarea>
                        </div>
                </div>
                <div class="col-md-6">
                    @if(session('info'))
                        <div class="alert alert-success" role="alert">
                            {{session('info')}}
                        </div>
                    @endif   
                        <div class="card">
                            <div class="card-header">
                                <div class="form-group">
                                    <button class="btn btn-success  w-50">Publicar</button>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-warning white  w-50">Editar</button>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-danger   w-50">Eliminar</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </form>
    </div>
</section>
{{-- fin seccion de alta de vacante, edicion y eluminacion --}}

{{-- seccion de la tabla de administracion de vacantes --}}
<section id="table_vacantes">
    <div class="container">
            <h2 class="text-center">Tabla de administracion de vacantes</h2>
        <table class="table">
            <thead>
                <th scope="col">Titulo</th>
                <th scope="col">Edad</th>
                <th scope="col">Preparacion</th>
                <th scope="col">Experiencia</th>
            </thead>
            <tbody>
                @foreach($vacantes as $vacante)
                <tr>
                    <td>{{$vacante->titulo}}</td>
                    <td>{{$vacante->edad}}</td>
                    <td>{{$vacante->descripcion}}</td>
                    <td>{{$vacante->experiencia}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
{{-- seccion de la tabla de administracion de vacantes --}}

@endsection 
