<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Venta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_venta', 'Precio Venta:') !!}
    {!! Form::text('precio_venta', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Costo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_costo', 'Precio Costo:') !!}
    {!! Form::text('precio_costo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Articulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_articulo', 'Tipo Articulo:') !!}
    {!! Form::text('tipo_articulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proveedor', 'Proveedor:') !!}
    {!! Form::text('proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Ibgreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_ingreso', 'Fecha Ingreso:') !!}
    {!! Form::text('fecha_ingreso', null, ['class' => 'form-control','id'=>'fecha_ingreso']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_ingreso').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('articulos.index') }}" class="btn btn-default">Cancel</a>
</div>
