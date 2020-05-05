
<div class="form-group">
    {!! Form::label('folio', 'folio') !!}
    {!! Form::text ('folio', null, ['class' =>'form-control']) !!}
</div>
<div class="form-group d-none">
    <label for="">contacto</label>
    {!! Form::checkbox ('contacto',0 ,  ['class' =>'form-control ']) !!}
</div>
<div class="form-group d-none">
    {!! Form::label('domicilio', 'Visita domiciliaria') !!}
    {!! Form::checkbox ('domicilio',0 ,  ['class' =>'form-control' ]) !!}
</div>
<div class="form-group d-none">
    {!! Form::label('documento', 'Entrega documentos') !!}
    {!! Form::checkbox ('documento',0 , ['class' =>'form-control' ]) !!}
</div>
<div class="form-group d-none">
    {!! Form::label('finalizo', 'Finalizado') !!}
    {!! Form::checkbox ('finalizo', 0 , ['class' =>'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::submit('guardar', ['class' => 'btn btn-primary']) !!}
</div>