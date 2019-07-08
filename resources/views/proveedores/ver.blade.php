@extends('layaout')

@section('mycontent')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('proveedores.index')}}" class="btn btn-default">Atrás</a>
	</div>
	<br/>
	<h3>Nombre - {{$data->first_name}}</h3>
	<h3>Apellido - {{$data->last_name}}</h3>
	<h3>Correo Electrónico - {{$data->email}}</h3>
	<h3>Teléfono - {{$data->phone}}</h3>
</div>
@endsection