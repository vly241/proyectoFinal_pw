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
                <a href="{{route('hm.index',['id'=>$examen_fisico->id_est])}}" class="btn btn-warning" class="btn btn-primary"><img src="{{asset('img/volver.png')}}" alt="volver" width="30px" href="30px"></a>


                <br><br>

                <h1>Editar examen fisico </h1>
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
                <form action="{{ url("estudiantes/{$examen_fisico->id_est}/historialMedico/nuevo") }}" method="POST">
                    @csrf

                    <div class="form-control">
                        <label >p_cadera</label>
                        <input type="text" name="p_cadera" value="{{ old('p_cadera',$examen_fisico->p_cadera) }}">

                    </div>

                    <div class="form-control">
                        <label >p_cintura</label>
                        <input type="text" name="p_cintura" value="{{ old('p_cintura',$examen_fisico->p_cintura) }}">

                    </div>
                    <div class="form-control">
                        <label >pulso</label>
                        <input type="text" name="pulso" value="{{ old('pulso',$examen_fisico->pulso) }}">

                    </div>
                    <div class="form-control">
                        <label >cabeza</label>
                        <input type="text" name="cabeza" value="{{ old('cabeza',$examen_fisico->cabeza) }}">

                    </div>
                    <div class="form-control">
                        <label >ojos</label>
                        <input type="text" name="ojos" value="{{ old('ojos',$examen_fisico->ojos) }}">
                    </div>
                    <div class="form-control">
                        <label >agudeza_visual</label>
                        <input type="text" name="agudeza_visual" value="{{ old('agudeza_visual',$examen_fisico->agudeza_visual) }}">

                    </div>
                    <div class="form-control">
                        <label >fondo_ojo</label>
                        <input type="text" name="fondo_ojo" value="{{ old('fondo_ojo',$examen_fisico->fondo_ojo) }}">

                    </div>

                    <div class="form-control">
                        <label >oidos</label>
                        <input type="text" name="oidos" value="{{ old('oidos',$examen_fisico->oidos) }}">

                    </div>
                    <div class="form-control">
                        <label >nariz</label>
                        <input type="text" name="nariz" value="{{ old('nariz',$examen_fisico->nariz) }}">

                    </div>
                    <div class="form-control">
                        <label >boca</label>
                        <input type="text" name="boca" value="{{ old('boca',$examen_fisico->boca) }}">

                    </div>
                    <div class="form-control">
                        <label >cuello</label>
                        <input type="text" name="cuello" value="{{ old('cuello',$examen_fisico->cuello) }}">

                    </div>
                    <div class="form-control">
                        <label >cardiopulmonar</label>
                        <input type="text" name="cardiopulmonar" value="{{ old('cardiopulmonar',$examen_fisico->cardiopulmonar) }}">

                    </div>
                    <div class="form-control">
                        <label >abdomen</label>
                        <input type="text" name="abdomen" value="{{ old('abdomen',$examen_fisico->abdomen) }}">

                    </div>
                    <div class="form-control">
                        <label >piel</label>
                        <input type="text" name="piel" value="{{ old('piel',$examen_fisico->piel) }}">

                    </div>
                    <div class="form-control">
                        <label >genitales</label>
                        <input type="text" name="genitales" value="{{ old('genitales',$examen_fisico->genitales) }}">

                    </div>
                    <div class="form-control">
                        <label >extrem_columna</label>
                        <input type="text" name="extrem_columna" value="{{ old('extrem_columna',$examen_fisico->extrem_columna) }}">

                    </div>
                    <div class="form-control">
                        <label >neurologicos_pares</label>
                        <input type="text" name="neurologicos_pares" value="{{ old('neurologicos_pares',$examen_fisico->neurologicos_pares) }}">

                    </div>
                    <div class="form-control">
                        <label >motor_cord_fuerza</label>
                        <input type="text" name="motor_cord_fuerza" value="{{ old('motor_cord_fuerza',$examen_fisico->motor_cord_fuerza) }}">

                    </div>
                    <div class="form-control">
                        <label >sensib_supe_conservado</label>
                        <input type="text" name="sensib_supe_conservado" value="{{ old('sensib_supe_conservado',$examen_fisico->sensib_supe_conservado) }}">

                    </div>
                    <div class="form-control">
                        <label >sensib_prof_conservada</label>
                        <input type="text" name="sensib_prof_conservada" value="{{ old('sensib_prof_conservada',$examen_fisico->sensib_prof_conservada) }}">

                    </div>
                    <div class="form-control">
                        <label >sensib_discriminativa</label>
                        <input type="text" name="sensib_discriminativa" value="{{ old('sensib_discriminativa',$examen_fisico->sensib_discriminativa) }}">

                    </div>
                    <div class="form-control">
                        <label >cutaneos</label>
                        <input type="text" name="cutaneos" value="{{ old('cutaneos',$examen_fisico->cutaneos) }}">

                    </div>
                    <div class="form-control">
                        <label >reflejos</label>
                        <input type="text" name="reflejos" value="{{ old('reflejos',$examen_fisico->reflejos) }}">

                    </div>
                    <div class="form-control">
                        <label >miotacticos</label>
                        <input type="text" name="miotacticos" value="{{ old('miotacticos',$examen_fisico->miotacticos) }}">

                    </div>
                    <div class="form-control">
                        <label >patologicos</label>
                        <input type="text" name="patologicos" value="{{ old('patologicos',$examen_fisico->patologicos) }}">

                    </div>
                    <div class="form-control">
                        <label >peso</label>
                        <input type="text" name="peso" value="{{ old('peso',$examen_fisico->peso) }}">

                    </div>
                    <div class="form-control">
                        <label >talla</label>
                        <input type="text" name="talla" value="{{ old('talla',$examen_fisico->talla) }}">

                    </div>
                    <div class="form-control">
                        <label >IMC</label>
                        <input type="text" name="IMC" value="{{ old('IMC',$examen_fisico->IMC) }}">

                    </div>
                    <div class="form-control">
                        <label >indice_cc</label>
                        <input type="text" name="indice_cc" value="{{ old('indice_cc',$examen_fisico->indice_cc) }}">

                    </div>





                    <button type="submit" class="btn btn-primary">actualizar</button>

                </form>

                <!-- END MAIN CONTENT-->
            </div>

        </div>

    </div>
@endsection

