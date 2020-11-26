<!-- Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente', 'Cliente:') !!}
    {!! Form::text('cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Empleado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_empleado', 'Nombre Empleado:') !!}
    {!! Form::text('nombre_empleado', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Facturacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_facturacion', 'Fecha Facturacion:') !!}
    {!! Form::text('fecha_facturacion', null, ['class' => 'form-control','id'=>'fecha_facturacion']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_facturacion').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Forma Pago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('forma_pago', 'Forma Pago:') !!}
    {!! Form::text('forma_pago', null, ['class' => 'form-control']) !!}
</div>

<!-- Iva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iva', 'Iva:') !!}
    {!! Form::text('iva', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Factura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_factura', 'Total Factura:') !!}
    {!! Form::text('total_factura', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('facturas.index') }}" class="btn btn-default">Cancel</a>
</div>
