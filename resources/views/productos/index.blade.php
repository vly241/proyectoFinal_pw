@extends('plantilla.app')
@section('title', 'Index Productos')
@section('contenido')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Pricing</h1>
        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>
    <a href="{{route('productos.create')}}" class="btn btn-primary">Crear Nuevo Producto</a>
    <div class="card-deck mb-3 text-center">
        @foreach($productos as $producto)
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{ $producto->nombre }}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">${{$producto->precio}} <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <a href="{{route('productos.show', $producto->id)}}" class="btn btn-primary">Ver</a>
                    <a href="{{route('productos.edit', $producto->id)}}" class="btn btn-warning">Editar</a>
                    <form action="{{route('productos.destroy', $producto->id)}}" method="POST">
                        {{ method_field('DELETE') }}
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                    </form>

                </div>
            </div>
        @endforeach

    </div>
    {{$productos->links()}}
@endsection