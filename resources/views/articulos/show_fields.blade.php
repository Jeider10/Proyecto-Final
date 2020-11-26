<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $articulos->id }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $articulos->descripcion }}</p>
</div>

<!-- Precio Venta Field -->
<div class="form-group">
    {!! Form::label('precio_venta', 'Precio Venta:') !!}
    <p>{{ $articulos->precio_venta }}</p>
</div>

<!-- Precio Costo Field -->
<div class="form-group">
    {!! Form::label('precio_costo', 'Precio Costo:') !!}
    <p>{{ $articulos->precio_costo }}</p>
</div>

<!-- Tipo Articulo Field -->
<div class="form-group">
    {!! Form::label('tipo_articulo', 'Tipo Articulo:') !!}
    <p>{{ $articulos->tipo_articulo }}</p>
</div>

<!-- Proveedor Field -->
<div class="form-group">
    {!! Form::label('proveedor', 'Proveedor:') !!}
    <p>{{ $articulos->proveedor }}</p>
</div>

<!-- Fecha Ibgreso Field -->
<div class="form-group">
    {!! Form::label('fecha_ibgreso', 'Fecha Ibgreso:') !!}
    <p>{{ $articulos->fecha_ibgreso }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $articulos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $articulos->updated_at }}</p>
</div>

