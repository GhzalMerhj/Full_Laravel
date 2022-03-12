<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Full Laravel  </title>

    <!-- Bootstrap -->
    <link href="{{ asset('backend/controlPanel/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link  href="{{ asset('backend/controlPanel/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link  href="{{ asset('backend/controlPanel/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link  href="{{ asset('backend/controlPanel/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link  href="{{ asset('backend/controlPanel/build/css/custom.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }} "/>
    <link  href="{{ asset('backend/controlPanel/src/css/customStyle.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- sidebar -->
        @include('backend/includes/sidebar')
        <!-- / sidebar -->


        <!-- top navigation -->
        @include('backend/includes/header')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')

        <!-- /page content -->

        <!-- footer content -->
        @include('backend/includes/footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script  src="{{ asset('backend/controlPanel/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
   <script  src="{{ asset('backend/controlPanel/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script  src="{{ asset('backend/controlPanel/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script  src="{{ asset('backend/controlPanel/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script  src="{{ asset('backend/controlPanel/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- jQuery Sparklines -->
    <script  src="{{ asset('backend/controlPanel/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- Flot -->
    <script  src="{{ asset('backend/controlPanel/vendors/Flot/jquery.flot.js') }}"></script>
    <script  src="{{ asset('backend/controlPanel/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script  src="{{ asset('backend/controlPanel/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script  src="{{ asset('backend/controlPanel/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script  src="{{ asset('backend/controlPanel/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script  src="{{ asset('backend/controlPanel/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script  src="{{ asset('backend/controlPanel/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script  src="{{ asset('backend/controlPanel/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script  src="{{ asset('backend/controlPanel/vendors/DateJS/build/date.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script  src="{{ asset('backend/controlPanel/vendors/moment/min/moment.min.js') }}"></script>
    <script  src="{{ asset('backend/controlPanel/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script  src="{{ asset('backend/controlPanel/build/js/custom.min.js') }}"></script>


    <script type="text/javascript" src="{{ asset('js/datatables.min.js') }} "></script>
    @stack('js')

  </body>
</html>
