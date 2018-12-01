@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            @include('menu.header_admin_movil');
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            @include('menu.sidebar_admin');
            <!-- END MENU SIDEBAR-->

            <div class="page-container" >
                <!-- MAIN CONTENT-->

                <h1>Editar estudiante</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <h6>Por favor corrige los errores debajo:</h6>
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ url("estudiantes/{$estudiantes->id}") }}" method="POST">
                    @csrf

                    <div class="form-control">
                        <label >identificacion</label>
                        <input type="text" name="identificacion" value="{{ old('identificacion',$estudiantes->identificacion) }}">

                    </div>
                    <div class="form-control">
                        <label for="nombre" >nombre</label>
                        <input type="text" name="nombre" placeholder="Ingrese nombre" value="{{ old('nombre',$estudiantes->nombre) }}">

                    </div>
                    <div class="form-control">
                        <label for="apellidos" >apellidos</label>
                        <input type="text" name="apellidos" placeholder="Ingrese apellidos" value="{{ old('apellidos',$estudiantes->apellidos) }}">
                    </div>
                    <div class="form-control">
                        <label for="origen" >origen</label>
                        <input type="text" name="origen" placeholder="Ingrese origen" value="{{ old('origen',$estudiantes->origen) }}">
                    </div>
                    <div class="form-control">
                        <label for="telefono" >telefono</label>
                        <input type="text" name="telefono" placeholder="Ingrese telefono" value="{{ old('telefono',$estudiantes->telefono) }}">
                    </div>
                    <div class="form-control">
                        <label for="direccion" >direccion</label>
                        <input type="text" name="direccion" placeholder="Ingrese direccion" value="{{ old('direccion',$estudiantes->direccion) }}">
                    </div>
                    <div class="form-control">
                        <label for="escolaridad" >escolaridad</label>
                        <input type="text" name="escolaridad" placeholder="Ingrese escolaridad" value="{{ old('escolaridad',$estudiantes->escolaridad) }}">
                    </div>
                    <div class="form-control">
                        <label for="ocupacion" >ocupacion</label>
                        <input type="text" name="ocupacion" placeholder="Ingrese ocupacion" value="{{ old('ocupacion',$estudiantes->ocupacion) }}">
                    </div>
                    <div class="form-control">
                        <label for="edad" >edad</label>
                        <input type="text" name="edad" placeholder="Ingrese edad" value="{{ old('edad',$estudiantes->edad) }}">
                    </div>
                    <div class="form-control">
                        <label for="email" >email</label>
                        <input type="email" name="email" placeholder="Ingrese email" value="{{ old('email',$estudiantes->email) }}">
                    </div>
                    <div class="form-control">
                        <label for="foto" >foto</label>
                        <input type="file" name="foto" placeholder="Ingrese foto" >
                    </div>




                    <button type="submit" class="btn btn-primary">actualizar estudiante</button>
                </form>


            <!-- END MAIN CONTENT-->
            </div>
        </div>
    </div>
@endsection
