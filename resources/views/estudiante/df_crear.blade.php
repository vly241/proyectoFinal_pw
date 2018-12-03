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
                <h1>Crear un Nuevo antecedente familiar</h1>
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
                <form action="{{url("estudiantes/{$antecedentes_familiares->id_est}/df/nuevo")}}" method="POST">
                    @csrf

                    <div class="form-control">
                        <label >descripcion</label>
                        <input type="text" name="descripcion" value="{{ old('descripcion') }}">

                    </div>
                    <div class="form-control">
                        <label >pariente</label>
                        <input type="text" name="pariente" value="{{ old('pariente') }}">

                    </div>




                    <button type="submit" class="btn btn-primary">Crear antecedente familiar</button>
                </form>
                <!-- END MAIN CONTENT-->
            </div>

        </div>

    </div>
@endsection
