@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-wrapper">

            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            @include('menu.sidebar_admin');
            <!-- END MENU SIDEBAR-->

            <div class="page-container" >
                <!-- MAIN CONTENT-->
                <br>
                <a href="{{route('est.df',['id'=>$antecedentes_familiares->id_est])}}" class="btn btn-warning" class="btn btn-primary"><img src="{{asset('img/volver.png')}}" alt="volver" width="30px" href="30px"></a>


                <br><br>

                <h1>Editar antecedentes familiares</h1>
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
                <form action="{{ url("estudiantes/{$antecedentes_familiares->id_est}/df") }}" method="POST">
                    @csrf

                    <div class="form-control">
                        <label >descripcion</label>
                        <input type="text" name="descripcion" value="{{ old('descripcion',$antecedentes_familiares->descripcion) }}">

                    </div>
                    <div class="form-control">
                        <label >parentesco:</label>
                        <input type="text" name="pariente" value="{{ old('pariente',$antecedentes_familiares->pariente) }}">

                    </div>


                    <button type="submit" class="btn btn-primary">actualizar antecedentes familiares</button>
                </form>

                <!-- END MAIN CONTENT-->
            </div>

        </div>

    </div>
@endsection

