@extends('layout')

@section('content')

@foreach ($registros as $registro)
    {{$registro->nombre}}
@endforeach




{{-- seccion de la tabla de administracion de vacantes --}}
<section id="table_vacantes">
    <div class="container-fluid">
            <h2 class="text-center">Tabla de Registros</h2>
        <div class="row">
            <div class="col-md-12"> 
                <table class="table">
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Mensaje</th>
                        <th scope="col">Fecha/Hrs</th>

                    </thead>
                    <tbody>
                        @foreach($registros as $registro)
                        <tr> 
                            <td>{{$registro->id}}</td>
                            <td>{{$registro->nombre}}</td>
                            <td>{{$registro->email}}</td>
                            <td>{{$registro->telefono}}</td>
                            <td>{{$registro->mensaje}}</td>
                            <td>{{$registro->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
            <div class="col-md-6">
            </div>
        </div>    
    </div>
</section>
@endsection