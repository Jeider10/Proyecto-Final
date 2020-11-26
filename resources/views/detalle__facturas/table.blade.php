<div class="table-responsive">
    <table class="table" id="detalleFacturas-table">
        <thead>
            <tr>
                <th>Id Del Articulo</th>
        <th>Cantidad</th>
        <th>Total</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detalleFacturas as $detalleFactura)
            <tr>
                <td>{{ $detalleFactura->id_articulo }}</td>
            <td>{{ $detalleFactura->cantidad }}</td>
            <td>{{ $detalleFactura->total }}</td>
                <td>
                    {!! Form::open(['route' => ['detalleFacturas.destroy', $detalleFactura->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detalleFacturas.show', [$detalleFactura->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('detalleFacturas.edit', [$detalleFactura->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
