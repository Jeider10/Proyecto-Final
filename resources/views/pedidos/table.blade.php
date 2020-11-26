<div class="table-responsive">
    <table class="table" id="pedidos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Cantidad</th>
        <th>Precio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedidos)
            <tr>
                <td>{{ $pedidos->nombre }}</td>
            <td>{{ $pedidos->cantidad }}</td>
            <td>{{ $pedidos->precio }}</td>
                <td>
                    {!! Form::open(['route' => ['pedidos.destroy', $pedidos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pedidos.show', [$pedidos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pedidos.edit', [$pedidos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
