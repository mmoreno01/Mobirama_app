@extends('layout')

@section('content')

 <div class="container p-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m-5">
                <div class="card-header" >Añadir nuevo role</div>
                <div class="card-body">
                    {!! Form::open (['route' => 'roles.store']) !!}

                        @include('roles.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection