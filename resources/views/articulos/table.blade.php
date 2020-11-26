<div class="table-responsive">
    <table class="table" id="articulos-table">
        <thead>
            <tr>
                <th>Descripcion</th>
        <th>Precio De La Venta</th>
        <th>Precio Del Costo</th>
        <th>Tipo De Articulo</th>
        <th>Proveedor</th>
        <th>Fecha De Ingreso</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articulos as $articulos)
            <tr>
                <td>{{ $articulos->descripcion }}</td>
            <td>{{ $articulos->precio_venta }}</td>
            <td>{{ $articulos->precio_costo }}</td>
            <td>{{ $articulos->tipo_articulo }}</td>
            <td>{{ $articulos->proveedor }}</td>
            <td>{{ $articulos->fecha_ingreso }}</td>
                <td>
                    {!! Form::open(['route' => ['articulos.destroy', $articulos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('articulos.show', [$articulos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('articulos.edit', [$articulos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
