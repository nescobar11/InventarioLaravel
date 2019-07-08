@extends('layaout')
@section('title', 'productos')
@section('menu_productos', 'active')
@section('mycontent')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


    <h2>Inventario</h2>
    <div align="right">
        <a href="{{ route('productos.create')}}" class="btn btn-default">Agregar</a>
    </div>
    <table class="table table-bordered table-striped">
        <tr>
            <th width="15%">Producto</th>
            <th width="15%">Cantidad</th>
            <th width="20%">Precio Unidad</th>
            <th width="15%">Lote</th>
            <th width="38%">Fecha Vencimiento</th>
            <th width="38%">Acción</th>
        </tr>
        @foreach($data as $row)

            <tr>
                <td>{{ $row->name}}</td>
                <td>{{ $row->quantity}}</td>
                <td>{{ $row->price}}</td>
                <td>{{ $row->lote}}</td>
                <td>{{ $row->expiration_date}}</td>
                <td>
                    <form action="{{ route('productos.destroy', $row->id) }}" method="post">
                        <a href="{{ route('productos.show', $row->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('productos.edit', $row->id) }}" class="btn btn-warning">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>

        @endforeach
        
    </table>

    {!! $data->links() !!}
@endsection