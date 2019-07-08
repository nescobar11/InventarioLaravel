@extends('layaout')
@section('title', 'proveedores')
@section('menu_proveedores', 'active')
@section('mycontent')



@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif



    <h2>Lista Proveedores</h2>
    <div align="right">
        <a href="{{ route('proveedores.create')}}" class="btn btn-default">Agregar</a>
    
    </div>
    <table class="table table-bordered table-striped">
        <tr>
            <th width="15%">Nombre</th>
            <th width="15%">Apellido</th>
            <th width="20%">Correo Electrónico</th>
            <th width="15%">Teléfono</th>
            <th width="38%">Acción</th>
        </tr>
        @foreach($data as $row)

            <tr>
                <td>{{ $row->first_name}}</td>
                <td>{{ $row->last_name}}</td>
                <td>{{ $row->email}}</td>
                <td>{{ $row->phone}}</td>
                <td>
                    <form action="{{ route('proveedores.destroy', $row->id) }}" method="post">
                        <a href="{{ route('proveedores.show', $row->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('proveedores.edit', $row->id) }}" class="btn btn-warning">Editar</a>
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