@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-wrapper">

            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
        @include('menu.sidebar_admin')
        <!-- END MENU SIDEBAR-->

            <div class="page-container" >
                <!-- MAIN CONTENT-->
                <br>
                <a href="{{route('hm.index',['id'=>$ef->id_est])}}" ><img src="{{asset('img/volver.png')}}" alt="volver" width="30px" href="30px"></a>
                <br><br>

                @if(Auth::User()->role_id=='1')
                    <a href="{{route('est.edit',['id'=>$ef->id])}}" class="btn btn-warning" class="btn btn-primary">editar</a>
                    <br><br>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h4>peso: {{$ef->peso}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>talla: {{$ef->talla}}</h4>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4>IMC: {{$ef->IMC}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>indice_cc: {{$ef->indice_cc}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Perimetro cadera: {{$ef->p_cadera}}</h4>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4>Perimetro cintura: {{$ef->p_cintura}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>pulso: {{$ef->pulso}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>cabeza: {{$ef->cabeza}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>ojos: {{$ef->ojos}}</h4>
                    </div>
                </div>
                <div class="card">
                    <h3>agudeza visual</h3>
                    <div class="card-body">
                        <h4>agudeza visual: {{$ef->agudeza_visual}}</h4>
                        <h4>fondo ojo: {{$ef->fondo_ojo}}</h4>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4>	oidos: {{$ef->oidos}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>nariz: {{$ef->nariz}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>boca: {{$ef->boca}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>cuello: {{$ef->cuello}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>cardiopulmonar: {{$ef->cardiopulmonar}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>abdomen: {{$ef->abdomen}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>piel: {{$ef->piel}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>genitales: {{$ef->genitales}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>extremidades y columna: {{$ef->extrem_columna}}</h4>
                    </div>
                </div>
                <div class="card">
                    <h3>Neurologicos</h3>
                    <div class="card-body">
                        <h4>pares: {{$ef->neurologicos_pares}}</h4>

                    </div>
                </div>
                <div class="card">
                    <h3>Motor y coordinacion</h3>
                    <div class="card-body">
                        <h4>tono: {{$ef->motor_cord_tono}}</h4>
                        <h4>fuerza: {{$ef->motor_cord_fuerza}}</h4>
                    </div>
                </div>

                <div class="card">
                    <h3>Sensibilidad</h3>
                    <div class="card-body">
                        <h4>superficial conservada: {{$ef->sensib_supe_conservado}}</h4>
                        <h4>profundo conservada: {{$ef->sensib_prof_conservada}}</h4>
                        <h4>discriminativa: {{$ef->sensib_discriminativa}}</h4>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4>cutaneos: {{$ef->cutaneos}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>reflejos: {{$ef->reflejos}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>miotacticos: {{$ef->miotacticos}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>patologicos: {{$ef->patologicos}}</h4>
                    </div>
                </div>

                <!-- END MAIN CONTENT-->


            </div>
        </div>
    </div>
@endsection

