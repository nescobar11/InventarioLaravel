@extends('layaout')
@section('title', 'facturacion')
@section('menu_facturacion', 'active')
@section('mycontent')



@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif



    <h2>Lista Facturas</h2>
    <div align="right">
        <a href="{{ route('facturacion.create')}}" class="btn btn-default">Agregar</a>
    
    </div>
    <table class="table table-bordered table-striped">
        <tr>
            <th width="15%">Nombre Cliente</th>
            <th width="15%">Documento</th>
            <th width="20%">Dirección</th>
            <th width="15%">Producto</th>
            <th width="15%">Cantidad</th>
            <th width="15%">Tipo de Pago</th>
            <th width="38%">Accion</th>
        </tr>
        @foreach($data as $row)

            <tr>
                <td>{{ $row->name_client}}</td>
                <td>{{ $row->document}}</td>
                <td>{{ $row->address}}</td>
                <td>{{ $row->name_product}}</td>
                <td>{{ $row->quantity}}</td>
                <td>{{ $row->payment_type}}</td>
                <td>
                    <form action="{{ route('facturacion.destroy', $row->id) }}" method="post">
                        <a href="{{ route('facturacion.show', $row->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('facturacion.edit', $row->id) }}" class="btn btn-warning">Editar</a>
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