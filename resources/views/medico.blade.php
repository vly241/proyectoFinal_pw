<!DOCTYPE html>
<html lang="en">

<head>

@include('head');

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
@include('header_medico_movil');
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
@include('sidebar_medico');
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
@include('header_medico_escritorio');
        <!-- HEADER DESKTOP-->




        <!-- END MAIN CONTENT-->

    </div>
    <!-- END PAGE CONTAINER-->
</div>

</div>

<!-- JS-->
@include('js');

</body>

</html>
<!-- end document-->
