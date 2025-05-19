<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Assignment School - Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/dolphine2.png')}}">

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}" >
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}" >

    <!-- Calendar CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/fullcalendar.min.css')}}">

    <!-- Datatable-->
    <link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">
	
	 <!-- Datetimepicker-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">

    <!-- Morris-->
    <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    
    <!--[if lt IE 9]>
		<script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
		<script src="{{asset('assets/js/respond.min.js')}}"></script>
	<![endif]-->

</head>
<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header start -->
        @include('layout/navbar')
        <!-- /Header -->

        <!-- sidebar -->
        @include('layout/sidebar')
        <!-- /sidebar -->

        <!-- content -->
        <div class="page-wrapper"> 
            <div class="content container-fluid">

                <!-- page-header-->
                @include('layout/navbar')
                <!--/ page-header-->

                <!-- content row -->
                @yield('content')
	</div>
    <!-- /Main Wrapper -->
    
    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
	

    <!-- Bootstrap Core JS -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Slimscroll -->
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>

    <!-- Select2 -->
    <script src="{{asset('assets/js/select2.min.js')}}"></script>
    
	<!-- datetimepicker JS -->
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

    <!-- Fullcalendar -->
	<script src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fullcalendar.js')}}"></script>
     
    <!-- Chart -->
    <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('assets/js/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/chart-data.js')}}"></script>

    <!-- custom Js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
   
    </body>
</html>