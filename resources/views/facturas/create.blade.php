 @extends('layaout')


@section('mycontent')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<h2>Formulario Facturas</h2>

<div align="right">
    <a href="{{route('facturacion.index')}}" class="btn btn-default">Atrás</a>
</div>

<form method="post" action="{{route('facturacion.store')}}" autocomplete="off">

    @csrf
    <div class="form-group">
        <label class="col-md-4 text-right">Nombre Cliente</label>
        <div class="col-md-8">
            <input type="text" name="name_client" class="form-control input-lg"/>
        </div>
        
    </div>
    <div class="form-group">
        <label class="col-md-4 text-right">Documento</label>
        <div class="col-md-8">
            <input type="text" name="document" class="form-control input-lg"/>
        </div>
        
    </div>
    <div class="form-group">
        <label class="col-md-4 text-right">Dirección </label>
        <div class="col-md-8">
            <input type="text" name="address" class="form-control input-lg"/>
        </div>
        
    </div>
    <div class="form-group">
        <label class="col-md-4 text-right">Producto</label>
        <div class="col-md-8">
            <input type="text" name="name_product" class="form-control input-lg"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 text-right">Cantidad</label>
        <div class="col-md-8">
            <input type="text" name="quantity" class="form-control input-lg"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 text-right">Tipo de Pago</label>
        <div class="col-md-8">
            <input type="text" name="payment_type" class="form-control input-lg"/>
        </div>
    </div>


    <br/><br /> <br/>
    <div class="form-group text-center">
        <input type="submit" name="add" class="btn btn-primary input-lg" value="Add">
        
    </div>

    
</form>
@endsection