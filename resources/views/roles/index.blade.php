@extends('layout')

@section('content')

 <div class="container p-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m-5">
                    @include('common.success')
                <div class="card-header" >
                    Roles
                    @can('roles.create')
                        <a href="{{ route('roles.create') }}"
                            class="btn btn-primary float-right">
                            Crear
                        </a>
                    @endcan
                </div>
                <div class="card-body">
                   <table class="table table-striped table-hover">
                        <thead>
                            <th width="10px">ID</th>
                            <th>Nombre</th>
                            <th colspan="3">&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name}}</td>
                                    <td>
                                        @can('roles.show')
                                            <a href="{{ route('roles.show', $role->id) }}"
                                                class="btn btn-info">
                                                Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('roles.edit')
                                            <a href="{{ route('roles.edit', $role->id) }}"
                                                class="btn btn-warning">
                                                Editar
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('roles.destroy')
                                           {!! Form::open (['route' => ['roles.destroy', $role->id],
                                           'method' => 'DELETE']) !!}
                                           <button class="btn btn-danger">Eliminar</button>
                                           {!! Form::close()!!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                   </table>
                   {{$roles->render()}}
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
