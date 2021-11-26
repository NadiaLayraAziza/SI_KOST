<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marvel Free Bootstrap Admin Template</title>
    <!-- Bootstrap Styles-->
    <link href="{{asset('assets-admin/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('assets-admin/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{asset('assets-admin/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('assets-admin/css/custom-styles.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('assets-admin/js/Lightweight-Chart/cssCharts.css')}}">
</head>

<body>
    <div id="wrapper">
        @include('layouts-admin.topnav')
        <!--/. NAV TOP  -->
        @include('layouts-admin.sidenav')
        <!-- /. NAV SIDE  -->

		@yield('content')
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{asset('assets-admin/js/jquery-1.10.2.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('assets-admin/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Js -->
    <script src="{{asset('assets-admin/js/jquery.metisMenu.js')}}"></script>
    <!-- Morris Chart Js -->
    <script src="{{asset('assets-admin/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/morris/morris.js')}}"></script>


	<script src="{{asset('assets-admin/js/easypiechart.js')}}"></script>
	<script src="{{asset('assets-admin/js/easypiechart-data.js')}}"></script>

	 <script src="{{asset('assets-admin/js/Lightweight-Chart/jquery.chart.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('assets-admin/js/custom-scripts.js')}}"></script>

      <script>

      </script>

</body>

</html>
