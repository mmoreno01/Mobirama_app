@extends('layout')

@section('content')
<section id="content-dashboard">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Bienvenido {{ auth()->user()->name }}</h1>
                        <h2 class="card-title">Email6 {{ auth()->user()->email }}</h2>
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


<section id="form_vacante">
    <div class="container">
        <form method="POST" action="{{ route('dashboard') }}">
        {{csrf_field()}}
            <div class="row">
                <div class="col-md-6"> 
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
                            <input type="text" class="form-control" name="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="">Experiencia Laboral</label>
                            <input type="text" class="form-control" name="experiencia">
                        </div>
                </div>
                <div class="col-md-6">
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
@endsection 
