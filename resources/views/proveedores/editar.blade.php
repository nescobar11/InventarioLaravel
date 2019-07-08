@extends('layaout')

@section('mycontent')
<div align="right">
	<a href="{{ route('proveedores.index') }}" class="btn btn-default">Atrás</a>
</div>
<br />

<form method="post" action="{{ route('proveedores.update', $data->id) }}" autocomplete="off">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Nombre Proveedor</label>
		<div class="col-md-8">
			<input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Apellido Proveedor</label>
		<div class="col-md-8">
			<input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Correo Electrónico</label>
		<div class="col-md-8">
			<input type="text" name="email" value="{{ $data->email }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group">
		<label class="col-md-4 text-right">Teléfono</label>
		<div class="col-md-8">
			<input type="text" name="phone" value="{{ $data->phone }}" class="form-control input-lg" />
		</div>
	</div>
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection