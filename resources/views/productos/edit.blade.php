@extends('plantilla.app')
@section('title', 'Create Productos')
@section('contenido')
    <h1>Modificar Producto {{$producto->nombre}}</h1>
    <form action="{{route('productos.update', $producto->id)}}" method="POST">
        {{ method_field('PUT') }}
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" value="{{$producto->nombre}}" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Nombre" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Precio</label>
            <input type="number" value="{{$producto->precio}}" name="precio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Precio" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Producto</button>
    </form>
@endsection