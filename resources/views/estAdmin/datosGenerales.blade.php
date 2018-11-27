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
            @include('admin.adminEstudiante')
            <h1>oli</h1>

            <!-- END MAIN CONTENT-->
            </div>
        </div>
    </div>
@endsection