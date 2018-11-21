<!DOCTYPE html>
<html lang="es">

<head>

@include('head');

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
       @include('header_admin_movil');
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
            @include('sidebar_admin');
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
           @include('header_admin_escritorio');
        <!-- HEADER DESKTOP-->




        <!-- END MAIN CONTENT-->

    </div>
    <!-- END PAGE CONTAINER-->
</div>

</div>

<!-- JS-->
@include('js')

</body>

</html>
<!-- end document-->
