@extends('plantilla.app')
@section('title', 'Create Productos')
@section('contenido')
    <h1>Crear un Nuevo Producto</h1>
    <form action="{{route('productos.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Nombre" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Precio</label>
            <input type="number" name="precio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Precio" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
@endsection