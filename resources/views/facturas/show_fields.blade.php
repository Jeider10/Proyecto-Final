<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $facturas->id }}</p>
</div>

<!-- Cliente Field -->
<div class="form-group">
    {!! Form::label('cliente', 'Cliente:') !!}
    <p>{{ $facturas->cliente }}</p>
</div>

<!-- Nombre Empleado Field -->
<div class="form-group">
    {!! Form::label('nombre_empleado', 'Nombre Empleado:') !!}
    <p>{{ $facturas->nombre_empleado }}</p>
</div>

<!-- Fecha Facturacion Field -->
<div class="form-group">
    {!! Form::label('fecha_facturacion', 'Fecha Facturacion:') !!}
    <p>{{ $facturas->fecha_facturacion }}</p>
</div>

<!-- Forma Pago Field -->
<div class="form-group">
    {!! Form::label('forma_pago', 'Forma Pago:') !!}
    <p>{{ $facturas->forma_pago }}</p>
</div>

<!-- Iva Field -->
<div class="form-group">
    {!! Form::label('iva', 'Iva:') !!}
    <p>{{ $facturas->iva }}</p>
</div>

<!-- Total Factura Field -->
<div class="form-group">
    {!! Form::label('total_factura', 'Total Factura:') !!}
    <p>{{ $facturas->total_factura }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $facturas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $facturas->updated_at }}</p>
</div>

