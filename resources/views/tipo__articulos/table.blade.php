<div class="table-responsive">
    <table class="table" id="tipoArticulos-table">
        <thead>
            <tr>
                <th>Descripcion</th>
        <th>Cantidad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tipoArticulos as $tipoArticulo)
            <tr>
                <td>{{ $tipoArticulo->descripcion }}</td>
            <td>{{ $tipoArticulo->cantidad }}</td>
                <td>
                    {!! Form::open(['route' => ['tipoArticulos.destroy', $tipoArticulo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tipoArticulos.show', [$tipoArticulo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tipoArticulos.edit', [$tipoArticulo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
