@extends('layout')

@section('content')
    <div id="content_principal" class="container">
        <div class="row">
            <div class="col-12">
               
                    <figure>
                        <img src="/imagenes/home-icons/m-whitef.png" alt="mobirama consultoria">
                    </figure>
                    <h3>Te recordamos que TuTest es solo una herramienta para apoyar al cuidado de tu salud</h3>
                    <h2>EN NINGÚN MOMENTO SE DEBE TOMAR LO SUGERIDO EN EL TEST COMO UN DIAGNÓSTICO </h2>
                    <h4>Mobirama Consultoria siempre recomienda consultar con un médico sobre el resultado de tu orientación.</h4>
                    <a href="{{ route('covit.test') }}"
                    class="btn btn-primary ">
                    INICIAR TEST
                </a>
            </div>
        </div>
    </div>
@endsection