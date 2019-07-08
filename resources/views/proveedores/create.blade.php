@extends('layaout')
@section('title', 'proveedores')

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

<h2>Formulario Proveedores</h2>

<div align="right">
    <a href="{{route('proveedores.index')}}" class="btn btn-default">Atrás</a>
</div>

<form method="post" action="{{route('proveedores.store')}}" autocomplete="off">

    @csrf
    <div class="form-group">
        <label class="col-md-4 text-right">Nombre </label>
        <div class="col-md-8">
            <input type="text" name="first_name" class="form-control input-lg"/>
        </div>
        
    </div>
    <div class="form-group">
        <label class="col-md-4 text-right">Apellido</label>
        <div class="col-md-8">
            <input type="text" name="last_name" class="form-control input-lg"/>
        </div>
        
    </div>
    <div class="form-group">
        <label class="col-md-4 text-right">Correo Electrónico</label>
        <div class="col-md-8">
            <input type="text" name="email" class="form-control input-lg"/>
        </div>
        
    </div>
    <div class="form-group">
        <label class="col-md-4 text-right">Teléfono</label>
        <div class="col-md-8">
            <input type="text" name="phone" class="form-control input-lg"/>
        </div>
    </div>

    <br/><br /> <br/>
    <div class="form-group text-center">
        <input type="submit" name="add" class="btn btn-primary input-lg" value="Add">
        
    </div>

    
</form>
@endsection