@extends('layout')

@section('content')

 <div class="container p-5" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card m-5">
                    @include('common.success')
                <div class="card-header" >Sintomas Presentes</div>
                    <div id="app" class="card-body">
                            <encuesta-component></encuesta-component>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

