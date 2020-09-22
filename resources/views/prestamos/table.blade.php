<table class="table table-responsive" id="prestamos-table">
    <thead>
        <tr>
        <th>Libro</th>
        <th>Ususario</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($prestamos as $prestamo)
        <tr>
            <td>{!! $prestamo->book->title !!}</td>
            <td>{!! $prestamo->user->name !!}</td>
            <td>{!! $prestamo->startDate !!}</td>
            <td>{!! $prestamo->endDate !!}</td>
            <td>
                {!! Form::open(['route' => ['prestamos.destroy', $prestamo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('prestamos.show', [$prestamo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('prestamos.edit', [$prestamo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>