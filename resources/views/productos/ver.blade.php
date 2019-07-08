@extends('layaout')

@section('mycontent')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('productos.index')}}" class="btn btn-default">Atrás</a>
	</div>
	<br/>
	<h3>Nombre Producto - {{$data->name}}</h3>
	<h3>Cantidad - {{$data->quantity}}</h3>
	<h3>Precio - {{$data->price}}</h3>
	<h3>Lote - {{$data->lote}}</h3>
	<h3>Fecha de Vencimiento - {{$data->expiration_date}}</h3>
</div>
@endsection