<div class="table-responsive">
    <table class="table" id="devolucions-table">
        <thead>
            <tr>
                <th>Id Detalles Del Articulo</th>
        <th>Motivo</th>
        <th>Fecha De Devolucion</th>
        <th>Cantidad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($devolucions as $devolucion)
            <tr>
                <td>{{ $devolucion->id_detalles_articulo }}</td>
            <td>{{ $devolucion->motivo }}</td>
            <td>{{ $devolucion->fecha_devolucion }}</td>
            <td>{{ $devolucion->cantidad }}</td>
                <td>
                    {!! Form::open(['route' => ['devolucions.destroy', $devolucion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('devolucions.show', [$devolucion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('devolucions.edit', [$devolucion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
