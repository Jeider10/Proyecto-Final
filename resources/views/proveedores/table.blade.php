<div class="table-responsive">
    <table class="table" id="proveedores-table">
        <thead>
            <tr>
                <th>Nombres</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Telefono</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($proveedores as $proveedores)
            <tr>
                <td>{{ $proveedores->nombres }}</td>
            <td>{{ $proveedores->apellidos }}</td>
            <td>{{ $proveedores->direccion }}</td>
            <td>{{ $proveedores->ciudad }}</td>
            <td>{{ $proveedores->telefono }}</td>
                <td>
                    {!! Form::open(['route' => ['proveedores.destroy', $proveedores->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('proveedores.show', [$proveedores->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('proveedores.edit', [$proveedores->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
