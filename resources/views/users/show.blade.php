@extends('layout')

@section('content')

 <div class="container p-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m-5">
                <div class="card-header" >Usuario</div>
                <div class="card-body">
                    <p><strong>Nombre </strong>{{ $user->name }}</p>
                    <p><strong>Email </strong>{{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection