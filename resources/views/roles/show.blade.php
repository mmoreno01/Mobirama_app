@extends('layout')

@section('content')

 <div class="container p-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m-5">
                <div class="card-header" >Role</div>
                <div class="card-body">
                    <p><strong>Nombre </strong>{{ $role->name }}</p>
                    <p><strong>Slug </strong>{{ $role->slug }}</p>
                    <p><strong>Descripcion </strong>{{ $role->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection