<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Yayasan Al-Mustaghfirin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/admin/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/admin/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/admin/vendor/chartist/css/chartist-custom.css')}}">
	<!-- DataTables CSS -->
    <link href="{{ asset('assets/admin/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('assets/admin/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('assets/admin/css/main.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/admin/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/admin/img/favicon.png')}}">
	
	<link rel="stylesheet" href="{{asset('assets/admin/css/custom.css')}}">

</head>

<body>
    <!-- WRAPPER -->
	<div id="wrapper">
		@include('inc.navadmin')
		@yield('content')
	</div>
    <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<!-- <script src="{{ asset('assets/admin/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script> -->
	<!-- <script src="{{ asset('assets/admin/vendor/chartist/js/chartist.min.js')}}"></script> -->
	<script src="{{ asset('assets/admin/scripts/klorofil-common.js')}}"></script>
	<!-- DataTables JavaScript -->
    <!-- <script src="{{ asset('assets/admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script> -->
    <!-- <script src="{{ asset('assets/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script> -->
    <!-- <script src="{{ asset('assets/admin/vendor/datatables-responsive/dataTables.responsive.js')}}"></script> -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body>

</html>
