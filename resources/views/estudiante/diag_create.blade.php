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
                <form action="{{ url('estudiantes') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">estudiante:</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="id_est">
                            @foreach($estudiantes as $estudiantes)
                                <option>{{$estudiantes->id}}</option >
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">diagnostico:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="diagnostico"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">plan:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="plan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">paraclinicos:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="paraclinicos"></textarea>
                    </div>




                    <button type="submit" class="btn btn-primary">crear</button>

                </form>

                <!-- END MAIN CONTENT-->
            </div>

        </div>

    </div>
@endsection

