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

<h2>Formulario Productos</h2>

<div align="right">
    <a href="{{route('productos.index')}}" class="btn btn-default">Atrás</a>
</div>

<form method="post" action="{{route('productos.store')}}" autocomplete="off">

    @csrf
    <div class="form-group">
        <label class="col-md-4 text-right">Nombre Producto</label>
        <div class="col-md-8">
            <input type="text" name="name" class="form-control input-lg"/>
        </div>
        
    </div>
    <div class="form-group">
        <label class="col-md-4 text-right">Cantidad</label>
        <div class="col-md-8">
            <input type="text" name="quantity" class="form-control input-lg"/>
        </div>
        
    </div>
    <div class="form-group">
        <label class="col-md-4 text-right">Precio</label>
        <div class="col-md-8">
            <input type="text" name="price" class="form-control input-lg"/>
        </div>
        
    </div>
    <div class="form-group">
        <label class="col-md-4 text-right">Lote</label>
        <div class="col-md-8">
            <input type="text" name="lote" class="form-control input-lg"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 text-right">Fecha de Vencimiento</label>
        <div class="col-md-8">
            <input type="text" name="expiration_date" class="form-control input-lg"/>
        </div>
    </div>


    <br/><br /> <br/>
    <div class="form-group text-center">
        <input type="submit" name="add" class="btn btn-primary input-lg" value="Add">
        
    </div>

    
</form>
@endsection