@extends('layaout')

@section('mycontent')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('facturacion.index')}}" class="btn btn-default">Atrás</a>
	</div>
	<br/>
	<h3>Nombre Cliente - {{$data->name_client}}</h3>
	<h3>Documento - {{$data->document}}</h3>
	<h3>Dirección - {{$data->address}}</h3>
	<h3>Producto - {{$data->name_product}}</h3>
	<h3>Cantidad - {{$data->quantity}}</h3>
	<h3>Tipo de Pago - {{$data->payment_type}}</h3>
</div>
@endsection