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
                <a href="{{route('d.index',['id'=>$d->id_est])}}" ><img src="{{asset('img/volver.png')}}" alt="volver" width="30px" href="30px"></a>
                <br><br>

                @if(Auth::User()->role_id=='1')
                    <a href="{{route('d.edit',['id'=>$d->id])}}" class="btn btn-warning" class="btn btn-primary">editar</a>
                    <br><br>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h4>diagnostico: {{$d->diagnostico}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>plan: {{$d->plan}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>paraclinicos: {{$d->paraclinicos}}</h4>
                    </div>
                </div>

                <!-- END MAIN CONTENT-->


            </div>
        </div>
    </div>
@endsection

