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
                <h1>Crear un Nuevo estudiante</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <h6>Por favor corrige los errores debajo:</h6>
                        {{--<ul>--}}
                        {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}
                    </div>
                @endif
                <form action="{{url('estudiantes/crear')}}" method="POST">
                    @csrf

                   <div class="form-control">
                       <label >identificacion</label>
                       <input type="text" name="identificacion" value="{{ old('identificacion') }}">
                        @if ($errors->has('identificacion'))
                               <p>{{ $errors->first('identificacion') }}</p>
                         @endif
                   </div>
                    <div class="form-control">
                        <label for="nombre" >nombre</label>
                        <input type="text" name="nombre" placeholder="Ingrese nombre" value="{{ old('nombre') }}">
                        @if ($errors->has('nombre'))
                                <p>{{ $errors->first('nombre') }}</p>
                         @endif
                    </div>
                    <div class="form-control">
                        <label for="apellidos" >apellidos</label>
                        <input type="text" name="apellidos" placeholder="Ingrese apellidos">
                    </div>
                    <div class="form-control">
                        <label for="origen" >origen</label>
                        <input type="text" name="origen" placeholder="Ingrese origen">
                    </div>
                    <div class="form-control">
                        <label for="telefono" >telefono</label>
                        <input type="text" name="telefono" placeholder="Ingrese telefono">
                    </div>
                    <div class="form-control">
                        <label for="direccion" >direccion</label>
                        <input type="text" name="direccion" placeholder="Ingrese direccion">
                    </div>
                    <div class="form-control">
                        <label for="escolaridad" >escolaridad</label>
                        <input type="text" name="escolaridad" placeholder="Ingrese escolaridad">
                    </div>
                    <div class="form-control">
                        <label for="ocupacion" >ocupacion</label>
                        <input type="text" name="ocupacion" placeholder="Ingrese ocupacion">
                    </div>
                    <div class="form-control">
                        <label for="edad" >edad</label>
                        <input type="text" name="edad" placeholder="Ingrese edad">
                    </div>
                    <div class="form-control">
                        <label for="email" >email</label>
                        <input type="email" name="email" placeholder="Ingrese email">
                    </div>
                    <div class="form-control">
                        <label for="foto" >foto</label>
                        <input type="file" name="foto" placeholder="Ingrese foto">
                    </div>




                    <button type="submit" class="btn btn-primary">Crear estudiante</button>
                </form>
                    {{--    <div class="form-group">

                  <label >Nombre</label>
                             <input type="text" id="nombre" name="nombre" class="form-control"  placeholder="Ingrese Nombre" required value="{{old('nombre')}}">

                         </div>
                         <div class="form-group">
                             <label>Apellidos</label>
                             <input type="text" name="apellidos" class="form-control" placeholder="Ingrese sus apellidos " required value="{{old('apellidos')}}">

                         </div>
                         <div class="form-group">
                             <label>identificacion</label>
                             <input type="text" name="identificacion" class="form-control"   placeholder="Ingrese identificacion" required value="{{old('identificacion')}}">

                         </div>
                         <div class="form-group">
                             <label>origen</label>
                             <input type="text" name="origen" class="form-control"  placeholder="Ingrese origen" required value="{{old('origen')}}">

                         </div>
                         <div class="form-group">
                             <label>telefono</label>
                             <input type="number" name="telefono" class="form-control"  placeholder="Ingrese " required value="{{old('telefono')}}">

                         </div>
                         <div class="form-group">
                             <label>direccion</label>
                             <input type="text" name="direccion" class="form-control"  placeholder="Ingrese direccion" required value="{{old('direccion')}}">

                         </div>

                         <div class="form-group">
                             <label>escolaridad</label>
                             <input type="text" name="escolaridad" class="form-control"  placeholder="Ingrese escolaridad" required value="{{old('escolaridad')}}">

                         </div>
                         <div class="form-group">
                             <label>ocupacion</label>
                             <input type="text" name="ocupacion" class="form-control"  placeholder="Ingrese ocupacion" required value="{{old('ocupacion')}}">

                         </div>
                         <div class="form-group">
                             <label>edad</label>
                             <input type="text" name="edad" class="form-control"  placeholder="Ingrese edad" required value="{{old('edad')}}">

                         </div>
                         <div class="form-group">
                             <label>email</label>
                             <input type="email" name="email" class="form-control"  placeholder="Ingrese email" required value="{{old('email')}}">

                         </div>
                         <div class="form-group">
                             <label for="">Foto estudiante</label>
                             <input type="file" name="foto" required class="form-control">
                         </div>--}}







                <!-- END MAIN CONTENT-->
            </div>

        </div>
    </div>
@endsection


