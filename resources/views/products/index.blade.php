@extends('layout')

@section('content')

{{-- seccion de card de identificacion de administrador --}}
<section id="content-dashboard" style="margin-top: 20px;">
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

 <div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card m-5">
                    @include('common.success')
                <div class="card-header" >
                    Estudios Socieconomicos
                    @can('products.create')
                        <a href="{{ route('products.create') }}"
                            class="btn btn-primary float-right">
                            Crear
                        </a>
                    @endcan
                </div>
                <div class="card-body">
                   <table class="table table-striped table-hover">
                        <thead>
                            <th width="10px">ID</th>
                            <th>Folio</th>
                            <th>Contacto al prospecto</th>
                            <th>Visita domiciliaria</th>
                            <th>Entrega documentos</th>
                            <th>Finalizado</th>
                            <th colspan="3">&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->folio}}</td>
                                    <td>

                                    {{-- <input type="checkbox" {{ $product->published ? 'checked' : ''}}>{{$product->published}} --}}
                                    <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1" {{ $product->contacto ? 'checked' : ''}} disabled>
                                            <label class="custom-control-label" for="customSwitch1"  ></label>
                                    </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" {{ $product->domicilio ? 'checked' : ''}} disabled>
                                                <label class="custom-control-label" for="customSwitch1"  ></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" {{ $product->documento ? 'checked' : ''}} disabled>
                                                <label class="custom-control-label" for="customSwitch1"  ></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" {{ $product->finalizo ? 'checked' : ''}} disabled>
                                                <label class="custom-control-label" for="customSwitch1"  ></label>
                                        </div>
                                    </td>
                                   
                                    {{-- <td>
                                        @can('products.show')
                                            <a href="{{ route('products.show', $product->id) }}"
                                                class="btn btn-info">
                                                Ver
                                            </a>
                                        @endcan
                                    </td> --}}
                                    <td>
                                        @can('products.edit')
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                class="btn btn-warning">
                                                Editar
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('products.destroy')
                                           {!! Form::open (['route' => ['products.destroy', $product->id],
                                           'method' => 'DELETE']) !!}
                                           <button class="btn btn-danger">Eliminar</button>
                                           {!! Form::close()!!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                   </table>
                   {{$products->render()}}
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
