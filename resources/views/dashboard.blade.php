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
            @include('common.success')
        <form class="" method="POST" action="{{ route('dashboard') }}">
        {{csrf_field()}}
            <div class="row d-flex justify-content-center">
                <div class="col-md-6"> 
                    <div class="card-header text-center">
                            <i class="fas fa-user-plus d-inline"></i>
                           <h3 class=" d-inline">Crear vacante</h3>
                    </div>
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" name="titulo" required>
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="text" class="form-control" name="edad" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Estudios</label>
                            <textarea type="text" class="form-control" name="descripcion" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="experiencia">Experiencia Laboral</label>
                            <textarea type="text" class="form-control" name="experiencia" required></textarea>
                        </div>
                         <div class="form-group ">
                                    <button class="btn btn-success  w-100">Publicar</button>
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
                <th scope="col">Accion</th>

            </thead>
            <tbody>
                @foreach($vacantes as $vacante)
                <tr>
                    <td>{{$vacante->titulo}}</td>
                    <td>{{$vacante->edad}}</td>
                    <td>{{$vacante->descripcion}}</td>
                    <td>{{$vacante->experiencia}}</td>
                    <td> 
                        <a href="/dashboard/{{$vacante->id}}/editar" class="btn btn-warning btn-xs">Editar</a>
                    </td>
                    <td>
                        <form method="POST" action="dashboard/{{$vacante->id}}">
                        @method('DELETE')
                        @csrf
                            <button class="btn btn-danger btn-xs">Eliminar </button>                     
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
{{-- seccion de la tabla de administracion de vacantes --}}

@endsection 
