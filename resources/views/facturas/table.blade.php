<div class="table-responsive">
    <table class="table" id="facturas-table">
        <thead>
            <tr>
                <th>Cliente</th>
        <th>Nombre Del Empleado</th>
        <th>Fecha De Facturacion</th>
        <th>Forma De Pago</th>
        <th>Total Factura</th>
        <th>Iva</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($facturas as $facturas)
            <tr>
                <td>{{ $facturas->cliente }}</td>
            <td>{{ $facturas->nombre_empleado }}</td>
            <td>{{ $facturas->fecha_facturacion }}</td>
            <td>{{ $facturas->forma_pago }}</td>
            <td>{{ $facturas->total_factura }}</td>
            <td>{{ $facturas->iva }}</td>
                <td>
                    {!! Form::open(['route' => ['facturas.destroy', $facturas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facturas.show', [$facturas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('facturas.edit', [$facturas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
