@extends('plantilla.app')
@section('title', 'Show Productos')
@section('contenido')
    <h1>Mostrar Producto {{$producto->nombre}}</h1>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" value="{{$producto->nombre}}" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Precio</label>
            <input type="number" value="{{$producto->precio}}" name="precio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>
    </form>
@endsection