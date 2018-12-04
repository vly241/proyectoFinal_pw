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
                        <li class="breadcrumb-item active">examen fisico</li>
                    </ul>
                </div>
                <br><br>

                <h1>crear examen fisico </h1>
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

                    <div class="form-control">
                        <label >p_cadera</label>
                        <input type="text" name="p_cadera" >

                    </div>

                    <div class="form-control">
                        <label >p_cintura</label>
                        <input type="text" name="p_cintura">

                    </div>
                    <div class="form-control">
                        <label >pulso</label>
                        <input type="text" name="pulso" >

                    </div>
                    <div class="form-control">
                        <label >cabeza</label>
                        <input type="text" name="cabeza">

                    </div>
                    <div class="form-control">
                        <label >ojos</label>
                        <input type="text" name="ojos" >
                    </div>
                    <div class="form-control">
                        <label >agudeza_visual</label>
                        <input type="text" name="agudeza_visual" >

                    </div>
                    <div class="form-control">
                        <label >fondo_ojo</label>
                        <input type="text" name="fondo_ojo">

                    </div>

                    <div class="form-control">
                        <label >oidos</label>
                        <input type="text" name="oidos">

                    </div>
                    <div class="form-control">
                        <label >nariz</label>
                        <input type="text" name="nariz" >

                    </div>
                    <div class="form-control">
                        <label >boca</label>
                        <input type="text" name="boca" >

                    </div>
                    <div class="form-control">
                        <label >cuello</label>
                        <input type="text" name="cuello" >

                    </div>
                    <div class="form-control">
                        <label >cardiopulmonar</label>
                        <input type="text" name="cardiopulmonar" >

                    </div>
                    <div class="form-control">
                        <label >abdomen</label>
                        <input type="text" name="abdomen" >

                    </div>
                    <div class="form-control">
                        <label >piel</label>
                        <input type="text" name="piel" >

                    </div>
                    <div class="form-control">
                        <label >genitales</label>
                        <input type="text" name="genitales" >

                    </div>
                    <div class="form-control">
                        <label >extrem_columna</label>
                        <input type="text" name="extrem_columna" >

                    </div>
                    <div class="form-control">
                        <label >neurologicos_pares</label>
                        <input type="text" name="neurologicos_pares" >

                    </div>
                    <div class="form-control">
                        <label >motor_cord_fuerza</label>
                        <input type="text" name="motor_cord_fuerza" >

                    </div>
                    <div class="form-control">
                        <label >sensib_supe_conservado</label>
                        <input type="text" name="sensib_supe_conservado" >

                    </div>
                    <div class="form-control">
                        <label >sensib_prof_conservada</label>
                        <input type="text" name="sensib_prof_conservada" >

                    </div>
                    <div class="form-control">
                        <label >sensib_discriminativa</label>
                        <input type="text" name="sensib_discriminativa" >

                    </div>
                    <div class="form-control">
                        <label >cutaneos</label>
                        <input type="text" name="cutaneos" >

                    </div>
                    <div class="form-control">
                        <label >reflejos</label>
                        <input type="text" name="reflejos" >

                    </div>
                    <div class="form-control">
                        <label >miotacticos</label>
                        <input type="text" name="miotacticos" >

                    </div>
                    <div class="form-control">
                        <label >patologicos</label>
                        <input type="text" name="patologicos" >

                    </div>
                    <div class="form-control">
                        <label >peso</label>
                        <input type="text" name="peso" >

                    </div>
                    <div class="form-control">
                        <label >talla</label>
                        <input type="text" name="talla" >

                    </div>
                    <div class="form-control">
                        <label >IMC</label>
                        <input type="text" name="IMC" >

                    </div>
                    <div class="form-control">
                        <label >indice_cc</label>
                        <input type="text" name="indice_cc" >

                    </div>





                    <button type="submit" class="btn btn-primary">crear</button>

                </form>

                <!-- END MAIN CONTENT-->
            </div>

        </div>

    </div>
@endsection

