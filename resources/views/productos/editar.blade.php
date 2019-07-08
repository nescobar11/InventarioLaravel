@extends('layaout')

@section('mycontent')
<div align="right">
	<a href="{{ route('productos.index') }}" class="btn btn-default">Atrás</a>
</div>
<br />

<form method="post" action="{{ route('productos.update', $data->id) }}" autocomplete="off">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Nombre Producto</label>
		<div class="col-md-8">
			<input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Cantidad</label>
		<div class="col-md-8">
			<input type="text" name="quantity" value="{{ $data->quantity }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Precio</label>
		<div class="col-md-8">
			<input type="text" name="price" value="{{ $data->price }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">Lote</label>
		<div class="col-md-8">
			<input type="text" name="lote" value="{{ $data-> lote }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">Fecha Vencimiento</label>
		<div class="col-md-8">
			<input type="text" name="expiration_date" value="{{ $data-> expiration_date }}" class="form-control input-lg" />
		</div>
	</div>
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection