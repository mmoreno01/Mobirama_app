@extends('layout')

@section('content')

{{-- seccion de card de identificacion de administrador --}}
<section id="content-dashboard" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
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

 <div class="container p-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m-5">
                    @include('common.success')
                <div class="card-header" >
                    Usuarios
                    {{-- @can('users.create')
                        <a href="{{ route('users.create') }}"
                            class="btn btn-primary float-right">
                            Crear
                        </a>
                    @endcan --}}
                </div>
                <div class="card-body">
                   <table class="table table-striped table-hover">
                        <thead>
                            <th width="10px">ID</th>
                            <th>Nombre</th>
                            <th colspan="3">&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name}}</td>
                                    <td>
                                        @can('users.show')
                                            <a href="{{ route('users.show', $user->id) }}"
                                                class="btn btn-info">
                                                Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('users.edit')
                                            <a href="{{ route('users.edit', $user->id) }}"
                                                class="btn btn-warning">
                                                Editar
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('users.destroy')
                                           {!! Form::open (['route' => ['users.destroy', $user->id],
                                           'method' => 'DELETE']) !!}
                                           <button class="btn btn-danger">Eliminar</button>
                                           {!! Form::close()!!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                   </table>
                   {{$users->render()}}
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
