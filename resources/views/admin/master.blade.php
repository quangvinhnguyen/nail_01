<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Luxury Nail - Admin </title>
        <link rel="shortcut icon" href="/images/1.png" type="image/png">
        <!-- Bootstrap -->
        {!! Html::style('admin_space/vendors/bootstrap/dist/css/bootstrap.min.css') !!}
        <!-- Font Awesome -->
        {!! Html::style('admin_space/vendors/font-awesome/css/font-awesome.min.css') !!}
        <!-- NProgress -->
        {!! Html::style('admin_space/vendors/nprogress/nprogress.css') !!}
        <!-- iCheck -->

        <!-- bootstrap-progressbar -->
        {!! Html::style('admin_space/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') !!}
        <!-- JQVMap -->
        {{-- <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/> --}}
        {!! Html::style('admin_space/vendors/jqvmap/dist/jqvmap.min.css') !!}
        <!-- bootstrap-daterangepicker -->
        {!! Html::style('admin_space/vendors/bootstrap-daterangepicker/daterangepicker.css') !!}
        <!-- Datatables -->
        {!! Html::style('admin_space/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
        {!! Html::style('admin_space/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') !!}
        {!! Html::style('admin_space/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') !!}
        {!! Html::style('admin_space/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') !!}
        {!! Html::style('admin_space/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') !!}

        <!-- Custom Theme Style -->
        {{-- <link href="../build/css/custom.min.css" rel="stylesheet"> --}}
        {!! Html::style('admin_space/css/custom.min.css') !!}
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('admin.blocks.menuleft')

                <!-- top navigation -->
                @include('admin.blocks.menutop')
                <!-- /top navigation -->

                <!-- page content -->
                @yield('content')
                <!-- /page content -->

                <!-- footer content -->
                @include('admin.blocks.footer')
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        {!! Html::script('admin_space/vendors/jquery/dist/jquery.min.js') !!}
        <!-- Bootstrap -->
        {!! Html::script('admin_space/vendors/bootstrap/dist/js/bootstrap.min.js') !!}
        <!-- FastClick -->
        {!! Html::script('admin_space/vendors/fastclick/lib/fastclick.js') !!}
        <!-- NProgress -->
        {!! Html::script('admin_space/vendors/nprogress/nprogress.js') !!}
        <!-- Chart.js -->
        {!! Html::script('admin_space/vendors/Chart.js/dist/Chart.min.js') !!}
        <!-- gauge.js -->
        {!! Html::script('admin_space/vendors/gauge.js/dist/gauge.min.js') !!}
        <!-- bootstrap-progressbar -->
        {!! Html::script('admin_space/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') !!}
        <!-- iCheck -->
        {!! Html::script('admin_space/vendors/iCheck/icheck.min.js') !!}
        <!-- Skycons -->
        {!! Html::script('admin_space/vendors/skycons/skycons.js') !!}
        <!-- Flot -->
        {!! Html::script('admin_space/vendors/Flot/jquery.flot.js') !!}
        {!! Html::script('admin_space/vendors/Flot/jquery.flot.pie.js') !!}
        {!! Html::script('admin_space/vendors/Flot/jquery.flot.time.js') !!}
        {!! Html::script('admin_space/vendors/Flot/jquery.flot.stack.js') !!}
        {!! Html::script('admin_space/vendors/Flot/jquery.flot.resize.js') !!}
        <!-- Flot plugins -->
        {!! Html::script('admin_space/vendors/flot.orderbars/js/jquery.flot.orderBars.js') !!}
        {!! Html::script('admin_space/vendors/flot-spline/js/jquery.flot.spline.min.js') !!}
        {!! Html::script('admin_space/vendors/flot.curvedlines/curvedLines.js') !!}
        <!-- DateJS -->
        {!! Html::script('admin_space/vendors/DateJS/build/date.js') !!}
        <!-- JQVMap -->
        {!! Html::script('admin_space/vendors/jqvmap/dist/jquery.vmap.js') !!}
        {!! Html::script('admin_space/vendors/jqvmap/dist/maps/jquery.vmap.world.js') !!}
        {!! Html::script('admin_space/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') !!}
        <!-- bootstrap-daterangepicker -->
        {!! Html::script('admin_space/vendors/moment/min/moment.min.js') !!}
        {!! Html::script('admin_space/vendors/bootstrap-daterangepicker/daterangepicker.js') !!}
        <!-- Datatables -->
        {!! Html::script('admin_space/vendors/datatables.net/js/jquery.dataTables.min.js') !!}
        {!! Html::script('admin_space/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
        {!! Html::script('admin_space/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') !!}
        {!! Html::script('admin_space/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') !!}
        {!! Html::script('admin_space/vendors/datatables.net-buttons/js/buttons.flash.min.js') !!}
        {!! Html::script('admin_space/vendors/datatables.net-buttons/js/buttons.html5.min.js') !!}
        {!! Html::script('admin_space/vendors/datatables.net-buttons/js/buttons.print.min.js') !!}
        {!! Html::script('admin_space/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') !!}
        {!! Html::script('admin_space/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') !!}
        {!! Html::script('admin_space/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') !!}
        {!! Html::script('admin_space/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') !!}
        {!! Html::script('admin_space/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') !!}
        {!! Html::script('admin_space/vendors/jszip/dist/jszip.min.js') !!}
        {!! Html::script('admin_space/vendors/pdfmake/build/pdfmake.min.js') !!}
        {!! Html::script('admin_space/vendors/pdfmake/build/vfs_fonts.js') !!}
          <!-- validator -->
        {{-- <script src="../vendors/validator/validator.js"></script> --}}
        {!! Html::script('admin_space/vendors/validator/validator.js') !!}
        <!-- Custom Theme Scripts -->
        {!! Html::script('admin_space/js/custom.min.js') !!}
        {!! Html::script('admin_space/resources/assets/admin/js/combo.js') !!}
    </body>
</html>
