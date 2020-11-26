<!-- Id Detalles Articulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_detalles_articulo', 'Id Detalles Articulo:') !!}
    {!! Form::text('id_detalles_articulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Motivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('motivo', 'Motivo:') !!}
    {!! Form::text('motivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Devolucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_devolucion', 'Fecha Devolucion:') !!}
    {!! Form::text('fecha_devolucion', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('devolucions.index') }}" class="btn btn-default">Cancel</a>
</div>
