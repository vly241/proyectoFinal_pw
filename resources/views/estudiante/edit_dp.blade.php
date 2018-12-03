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
                <a href="{{route('est.dp',['id'=>$antecedentes_personales->id_est])}}" class="btn btn-warning" class="btn btn-primary"><img src="{{asset('img/volver.png')}}" alt="volver" width="30px" href="30px"></a>


                <br><br>

                <h1>Editar antecedentes personales</h1>
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
                <form action="{{ url("estudiantes/{$antecedentes_personales->id_est}/dp") }}" method="POST">
                    @csrf

                    <div class="form-control">
                        <label >hospitalarios</label>
                        <input type="text" name="hospitalarios" value="{{ old('hospitalarios',$antecedentes_personales->hospitalarios) }}">

                    </div>
                    <div class="form-control">
                        <label >traumaticos:</label>
                        <input type="text" name="traumaticos" value="{{ old('traumaticos',$antecedentes_personales->traumaticos) }}">

                    </div>
                    <div class="form-control">
                        <label >	psiquiatricos:</label>
                        <input type="text" name="psiquiatricos" value="{{ old('psiquiatricos',$antecedentes_personales->psiquiatricos) }}">

                    </div>
                    <div class="form-control">
                        <label >transfusiones:</label>
                        <input type="text" name="transfusiones" value="{{ old('transfusiones',$antecedentes_personales->transfusiones) }}">

                    </div>
                    <div class="form-control">
                        <label >farmacologicos:</label>
                        <input type="text" name="farmacologicos" value="{{ old('farmacologicos',$antecedentes_personales->farmacologicos) }}">

                    </div>
                    <div class="form-control">
                        <label >toxicos:</label>
                        <input type="text" name="toxicos" value="{{ old('toxicos',$antecedentes_personales->toxicos) }}">

                    </div>
                    <div class="form-control">
                        <label >quirurgicos: </label>
                        <input type="text" name="quirurgicos" value="{{ old('quirurgicos',$antecedentes_personales->quirurgicos) }}">

                    </div>
                    <div class="form-control">
                        <label >patologicos</label>
                        <input type="text" name="patologicos" value="{{ old('patologicos',$antecedentes_personales->patologicos) }}">

                    </div>
                    <div class="form-control">
                        <label >gine_menarquia:</label>
                        <input type="text" name="gine_menarquia" value="{{ old('gine_menarquia',$antecedentes_personales->gine_menarquia) }}">

                    </div>
                    <div class="form-control">
                        <label >gine_ciclos:</label>
                        <input type="text" name="gine_ciclos" value="{{ old('gine_ciclos',$antecedentes_personales->gine_ciclos) }}">

                    </div>
                    <div class="form-control">
                        <label >gine_FUP:</label>
                        <input type="text" name="gine_FUP" value="{{ old('gine_FUP',$antecedentes_personales->gine_FUP) }}">

                    </div>
                    <div class="form-control">
                        <label >gine_citologicos</label>
                        <input type="text" name="gine_citologicos" value="{{ old('gine_citologicos',$antecedentes_personales->gine_citologicos) }}">

                    </div>

                    <div class="form-control">
                        <label >gine_planificacion</label>
                        <input type="text" name="gine_planificacion" value="{{ old('gine_planificacion',$antecedentes_personales->gine_planificacion) }}">

                    </div>



                    <button type="submit" class="btn btn-primary">actualizar antecedentes personales</button>
                </form>

                <!-- END MAIN CONTENT-->
            </div>

        </div>

    </div>
@endsection
