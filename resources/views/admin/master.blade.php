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
    {{-- <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {!! Html::style('admin/vendors/bootstrap/dist/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {{-- <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"> --}}
   {!! Html::style('admin/vendors/font-awesome/css/font-awesome.min.css') !!}
    <!-- NProgress -->
    {{-- <link href="../vendors/nprogress/nprogress.css" rel="stylesheet"> --}}
        {!! Html::style('admin/vendors/nprogress/nprogress.css') !!}
    <!-- iCheck -->
    {{-- <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet"> --}}
	
    <!-- bootstrap-progressbar -->
    {{-- <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"> --}}
       {!! Html::style('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') !!}
    <!-- JQVMap -->
    {{-- <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/> --}}
    {!! Html::style('admin/vendors/jqvmap/dist/jqvmap.min.css') !!}
    <!-- bootstrap-daterangepicker -->
    {{-- <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> --}}
    {!! Html::style('admin/vendors/bootstrap-daterangepicker/daterangepicker.css') !!}
    <!-- Datatables -->
    {{-- <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"> --}}
      {!! Html::style('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
    {{-- <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet"> --}}
    {!! Html::style('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') !!}
    {{-- <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet"> --}}
      {!! Html::style('admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') !!}
    {{-- <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet"> --}}
      {!! Html::style('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') !!}
    {{-- <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet"> --}}
 {!! Html::style('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') !!}

    <!-- Custom Theme Style -->
    {{-- <link href="../build/css/custom.min.css" rel="stylesheet"> --}}
      {!! Html::style('admin/css/custom.min.css') !!}
 
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
    {{-- <script src="../vendors/jquery/dist/jquery.min.js"></script> --}}
     {!! Html::script('admin/vendors/jquery/dist/jquery.min.js') !!}
    <!-- Bootstrap -->
    {{-- <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script> --}}
    {!! Html::script('admin/vendors/bootstrap/dist/js/bootstrap.min.js') !!}
    <!-- FastClick -->
    {{-- <script src="../vendors/fastclick/lib/fastclick.js"></script> --}}
     {!! Html::script('admin/vendors/fastclick/lib/fastclick.js') !!}
    <!-- NProgress -->
    {{-- <script src="../vendors/nprogress/nprogress.js"></script> --}}
     {!! Html::script('admin/vendors/nprogress/nprogress.js') !!}
    <!-- Chart.js -->
    {{-- <script src="../vendors/Chart.js/dist/Chart.min.js"></script> --}}
     {!! Html::script('admin/vendors/Chart.js/dist/Chart.min.js') !!}
    <!-- gauge.js -->
    {{-- <script src="../vendors/gauge.js/dist/gauge.min.js"></script> --}}
    {!! Html::script('admin/vendors/gauge.js/dist/gauge.min.js') !!}
    <!-- bootstrap-progressbar -->
    {{-- <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> --}}
    {!! Html::script('admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') !!}
    <!-- iCheck -->
    {{-- <script src="../vendors/iCheck/icheck.min.js"></script> --}}
    {!! Html::script('admin/vendors/iCheck/icheck.min.js') !!}
    <!-- Skycons -->
    {{-- <script src="../vendors/skycons/skycons.js"></script> --}}
    {!! Html::script('admin/vendors/skycons/skycons.js') !!}
    <!-- Flot -->
    {{-- <script src="../vendors/Flot/jquery.flot.js"></script> --}}
    {!! Html::script('admin/vendors/Flot/jquery.flot.js') !!}
    {{-- <script src="../vendors/Flot/jquery.flot.pie.js"></script> --}}
        {!! Html::script('admin/vendors/Flot/jquery.flot.pie.js') !!}
    {{-- <script src="../vendors/Flot/jquery.flot.time.js"></script> --}}
     {!! Html::script('admin/vendors/Flot/jquery.flot.time.js') !!}
    {{-- <script src="../vendors/Flot/jquery.flot.stack.js"></script> --}}
      {!! Html::script('admin/vendors/Flot/jquery.flot.stack.js') !!}
    {{-- <script src="../vendors/Flot/jquery.flot.resize.js"></script> --}}
    {!! Html::script('admin/vendors/Flot/jquery.flot.resize.js') !!}
    <!-- Flot plugins -->
    {{-- <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script> --}}
     {!! Html::script('admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') !!}
    {{-- <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script> --}}
     {!! Html::script('admin/vendors/flot-spline/js/jquery.flot.spline.min.js') !!}
    {{-- <script src="../vendors/flot.curvedlines/curvedLines.js"></script> --}}
     {!! Html::script('admin/vendors/flot.curvedlines/curvedLines.js') !!}
    <!-- DateJS -->
    {{-- <script src="../vendors/DateJS/build/date.js"></script> --}}
    {!! Html::script('admin/vendors/DateJS/build/date.js') !!}
    <!-- JQVMap -->
    {{-- <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script> --}}
    {!! Html::script('admin/vendors/jqvmap/dist/jquery.vmap.js') !!}
    {{-- <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script> --}}
      {!! Html::script('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') !!}
    {{-- <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> --}}
     {!! Html::script('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') !!}
    <!-- bootstrap-daterangepicker -->
    {{-- <script src="../vendors/moment/min/moment.min.js"></script> --}}
    {!! Html::script('admin/vendors/moment/min/moment.min.js') !!}
    {{-- <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script> --}}
  {!! Html::script('admin/vendors/bootstrap-daterangepicker/daterangepicker.js') !!}
     <!-- Datatables -->
    {{-- <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script> --}}
     {!! Html::script('admin/vendors/datatables.net/js/jquery.dataTables.min.js') !!}
    {{-- <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> --}}
    {!! Html::script('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
    {{-- <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script> --}}
      {!! Html::script('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') !!}
    {{-- <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script> --}}
     {!! Html::script('admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') !!}
    {{-- <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script> --}}
    {!! Html::script('admin/vendors/datatables.net-buttons/js/buttons.flash.min.js') !!}
    {{-- <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script> --}}
    {!! Html::script('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js') !!}
    {{-- <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script> --}}
    {!! Html::script('admin/vendors/datatables.net-buttons/js/buttons.print.min.js') !!}
    {{-- <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script> --}}
       {!! Html::script('admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') !!}
    {{-- <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script> --}}
     {!! Html::script('admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') !!}
    {{-- <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script> --}}
     {!! Html::script('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') !!}
    {{-- <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script> --}}
     {!! Html::script('admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') !!}
    {{-- <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script> --}}
     {!! Html::script('admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') !!}
    {{-- <script src="../vendors/jszip/dist/jszip.min.js"></script> --}}
     {!! Html::script('admin/vendors/jszip/dist/jszip.min.js') !!}
    {{-- <script src="../vendors/pdfmake/build/pdfmake.min.js"></script> --}}
    {!! Html::script('admin/vendors/pdfmake/build/pdfmake.min.js') !!}
    {{-- <script src="../vendors/pdfmake/build/vfs_fonts.js"></script> --}}
     {!! Html::script('admin/vendors/pdfmake/build/vfs_fonts.js') !!}
      <!-- validator -->
    {{-- <script src="../vendors/validator/validator.js"></script> --}}
     {!! Html::script('admin/vendors/validator/validator.js') !!}
    <!-- Custom Theme Scripts -->
    {{-- <script src="../build/js/custom.min.js"></script> --}}
    {!! Html::script('admin/js/custom.min.js') !!}
	
   
  </body>
</html>
