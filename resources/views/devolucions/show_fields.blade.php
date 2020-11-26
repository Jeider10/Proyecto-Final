<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $devolucion->id }}</p>
</div>

<!-- Id Detalles Articulo Field -->
<div class="form-group">
    {!! Form::label('id_detalles_articulo', 'Id Detalles Articulo:') !!}
    <p>{{ $devolucion->id_detalles_articulo }}</p>
</div>

<!-- Motivo Field -->
<div class="form-group">
    {!! Form::label('motivo', 'Motivo:') !!}
    <p>{{ $devolucion->motivo }}</p>
</div>

<!-- Fecha Devolucion Field -->
<div class="form-group">
    {!! Form::label('fecha_devolucion', 'Fecha Devolucion:') !!}
    <p>{{ $devolucion->fecha_devolucion }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $devolucion->cantidad }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $devolucion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $devolucion->updated_at }}</p>
</div>

