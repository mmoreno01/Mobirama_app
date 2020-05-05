
<table class="table table-striped table-hover"> 
    <thead>
        <th width="10px">ID</th>
        <th>Folio</th>
        <th>Contacto al prospecto</th>
        <th>Visita domiciliaria</th>
        <th>Entrega documentos</th>
        <th>Finalizado</th>
        <th colspan="3">&nbsp;</th>
    </thead> 
    <tbody>
    <tr>
        <th>
            {{ $product->id }}
        </th>
        <th>
            <div class="form-group">
                <input type="text" class="form-control" name="folio" value="{{ $product->folio }}">
            </div>
        </th>
        <th>
             <div class="form-group">
                <input type="checkbox" class="" id="" name="contacto" {{ $product->contacto ? 'checked' : ''}} >
            </div> 
            
        </th>
        <th>
            <div class="form-group">
                <input type="checkbox" class="" id="" name="domicilio" {{ $product->domicilio ? 'checked' : ''}} >
            </div> 
           
        </th>
        <th>
             <div class="form-group">
                <input type="checkbox" class="" id="" name="documento" {{ $product->documento ? 'checked' : ''}} >
            </div> 
           
        </th>
        <th>
             <div class="form-group">
                <input type="checkbox" class="" id="" name="finalizo" {{ $product->finalizo ? 'checked' : ''}} >
            </div>

        </th>
    </tr>
    </tbody>
</table>
       

               
                
               
               
               
                
                
            
        
  
{{-- <div class="form-group ">
    {!! Form::label('domicilio', 'Visita domiciliaria') !!}
    {!! Form::checkbox('products[]', $product->domicilio, null) !!}
</div>
<div class="form-group ">
    {!! Form::label('documento', 'Entrega documentos') !!}
    {!! Form::checkbox('products[]', $product->documento, null) !!}
</div>
<div class="form-group ">
    {!! Form::label('finalizo', 'Finalizado') !!}
    {!! Form::checkbox('products[]', $product->finalizo, null) !!}
</div> --}}

<div class="form-group">
        {!! Form::submit('guardar', ['class' => 'btn btn-primary']) !!}
</div>