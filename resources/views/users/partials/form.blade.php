
<div class="form-group">
    {!! Form::label('name', 'Nombre del producto') !!}
    {!! Form::text ('name', null, ['class' =>'form-control']) !!}
</div>

<hr>
<h3>Lista de roles</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($roles as $role)
        <li>
            <label for="">
                 {!! Form::checkbox('roles[]', $role->id, null) !!}
                 {{ $role->name }}
                <em>{{ $role->description ?: 'N/A' }}</em>
            </label>
        </li>
        @endforeach
    </ul>
</div>

<div class="form-group">
        {!! Form::submit('guardar', ['class' => 'btn btn-primary']) !!}
</div>