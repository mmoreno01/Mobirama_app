@extends('layout')

@section('content')

 <div class="container p-5" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card m-5">
                    @include('common.success')
                <div class="card-header" >Estudio socioeconomico</div>
                <div class="card-body">
                    {!! Form::model ($product, ['route' => ['products.update', $product->id],
                     'method' => 'PUT' ]) !!}

                        @include('products.partials.formEdit')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection