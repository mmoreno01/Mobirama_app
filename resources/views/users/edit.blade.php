@extends('layout')

@section('content')

 <div class="container p-5" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m-5">
                    @include('common.success')
                <div class="card-header" >Usuario</div>
                <div class="card-body">
                    {!! Form::model ($user, ['route' => ['users.update', $user->id],
                     'method' => 'PUT' ]) !!}

                        @include('users.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection