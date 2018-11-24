@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            @include('admin.header_admin_movil');
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            @include('admin.sidebar_admin');
            <!-- END MENU SIDEBAR-->


            <div class="page-container" >
                <!-- MAIN CONTENT-->

                <h1>Usuario #{{ $est->id }}</h1>


                <p>
                    <a href="/">Regresar al listado de usuarios</a>
                </p>


                <!-- END MAIN CONTENT-->
            </div>

        </div>
    </div>
@endsection
