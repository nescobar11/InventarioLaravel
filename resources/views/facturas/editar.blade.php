@extends('layaout')

@section('mycontent')
<div align="right">
	<a href="{{ route('facturacion.index') }}" class="btn btn-default">Atrás</a>
</div>
<br />

<form method="post" action="{{ route('facturacion.update', $data->id) }}" autocomplete="off">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Nombre Cliente</label>
		<div class="col-md-8">
			<input type="text" name="mane_client" value="{{ $data->name_client }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Documento</label>
		<div class="col-md-8">
			<input type="text" name="document" value="{{ $data->document }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Dirección</label>
		<div class="col-md-8">
			<input type="text" name="address" value="{{ $data->address }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">Producto</label>
		<div class="col-md-8">
			<input type="text" name="name_product" value="{{ $data-> name_product }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">Cantidad</label>
		<div class="col-md-8">
			<input type="text" name="quantity" value="{{ $data-> quantity }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">Tipo de Pago</label>
		<div class="col-md-8">
			<input type="text" name="payment_type" value="{{ $data-> payment_type }}" class="form-control input-lg" />
		</div>
	</div>

	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection