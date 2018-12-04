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
                <a href="{{route('d.index',['id'=>$impresion_diagnostica->id_est])}}" class="btn btn-warning" class="btn btn-primary"><img src="{{asset('img/volver.png')}}" alt="volver" width="30px" href="30px"></a>


                <br><br>
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a hrefe="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Diagnostico</li>
                    </ul>
                </div>
                <br><br>

                <h1>crear diagnostico </h1>
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
                <form action="{{ url("estudiantes/{$impresion_diagnostica->id_est}/diagnostico/update") }}" method="POST">
                    @csrf


                    <div class="form-control">
                        <label >diagnostico</label>
                        <input type="text" name="diagnostico" value="{{ old('diagnostico',$impresion_diagnostica->diagnostico) }}">

                    </div>

                    <div class="form-control">
                        <label >plan</label>
                        <input type="text" name="plan" value="{{ old('plan',$impresion_diagnostica->plan) }}">

                    </div>
                    <div class="form-control">
                        <label >paraclinicos:</label>
                        <input type="text" name="paraclinicos" value="{{ old('paraclinicos',$impresion_diagnostica->paraclinicos) }}">

                    </div>





                    <button type="submit" class="btn btn-primary">crear</button>

                </form>

                <!-- END MAIN CONTENT-->
            </div>

        </div>

    </div>
@endsection

