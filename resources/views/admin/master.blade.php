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
    {!! Html::style('forAdmin/vendors/bootstrap/dist/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {{-- <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"> --}}
    {!! Html::style('forAdmin/vendors/font-awesome/css/font-awesome.min.css') !!}
    <!-- NProgress -->
    {{-- <link href="../vendors/nprogress/nprogress.css" rel="stylesheet"> --}}
    {!! Html::style('forAdmin/vendors/nprogress/nprogress.css') !!}
    <!-- iCheck -->
    {{-- <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet"> --}}
	
    <!-- bootstrap-progressbar -->
    {{-- <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"> --}}
    {!! Html::style('forAdmin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') !!}
    <!-- JQVMap -->
    {{-- <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/> --}}
    {!! Html::style('forAdmin/vendors/jqvmap/dist/jqvmap.min.css') !!}
    <!-- bootstrap-daterangepicker -->
    {{-- <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> --}}
    {!! Html::style('forAdmin/vendors/bootstrap-daterangepicker/daterangepicker.css') !!}
    <!-- Datatables -->
    {{-- <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"> --}}
    {!! Html::style('forAdmin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
    {{-- <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet"> --}}
    {!! Html::style('forAdmin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') !!}
    {{-- <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet"> --}}
    {!! Html::style('forAdmin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') !!}
    {{-- <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet"> --}}
    {!! Html::style('forAdmin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') !!}
    {{-- <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet"> --}}
    {!! Html::style('forAdmin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') !!}
    <!-- Custom Theme Style -->
    {{-- <link href="../build/css/custom.min.css" rel="stylesheet"> --}}
    {!! Html::style('forAdmin/css/custom.min.css') !!}
    <!-- Generic page styles -->
    {{-- <link rel="stylesheet" href="/server/css/style.css"> --}}
    {!! Html::style('server/css/style.css') !!}
    <!-- blueimp Gallery styles -->
    {{-- <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css"> --}}
    {!! Html::style('server/css/blueimp-gallery.min.css') !!}
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    {{-- <link rel="stylesheet" href="/server/css/jquery.fileupload.css"> --}}
    {!! Html::style('server/css/jquery.fileupload.css') !!}
    {{-- <link rel="stylesheet" href="/server/css/jquery.fileupload-ui.css"> --}}
    {!! Html::style('server/css/jquery.fileupload-ui.css') !!}
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    {{-- <noscript><link rel="stylesheet" href="/server/css/jquery.fileupload-noscript.css"></noscript> --}}
    {{-- {!! Html::style('server/css/jquery.fileupload-noscript.css') !!} --}}
    {{-- <noscript><link rel="stylesheet" href="/server/css/jquery.fileupload-ui-noscript.css"></noscript> --}}
    {{-- {!! Html::style('server/css/jquery.fileupload-ui-noscript.css') !!} --}}
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
    {!! Html::script('forAdmin/vendors/jquery/dist/jquery.min.js') !!}
    <!-- Bootstrap -->
    {{-- <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/bootstrap/dist/js/bootstrap.min.js') !!}
    <!-- FastClick -->
    {{-- <script src="../vendors/fastclick/lib/fastclick.js"></script> --}}
    {!! Html::script('forAdmin/vendors/fastclick/lib/fastclick.js') !!}
    <!-- NProgress -->
    {{-- <script src="../vendors/nprogress/nprogress.js"></script> --}}
    {!! Html::script('forAdmin/vendors/nprogress/nprogress.js') !!}
    <!-- Chart.js -->
    {{-- <script src="../vendors/Chart.js/dist/Chart.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/Chart.js/dist/Chart.min.js') !!}
    <!-- gauge.js -->
    {{-- <script src="../vendors/gauge.js/dist/gauge.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/gauge.js/dist/gauge.min.js') !!}
    <!-- bootstrap-progressbar -->
    {{-- <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') !!}
    <!-- iCheck -->
    {{-- <script src="../vendors/iCheck/icheck.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/iCheck/icheck.min.js') !!}
    <!-- Skycons -->
    {{-- <script src="../vendors/skycons/skycons.js"></script> --}}
    {!! Html::script('forAdmin/vendors/skycons/skycons.js') !!}
    <!-- Flot -->
    {{-- <script src="../vendors/Flot/jquery.flot.js"></script> --}}
    {!! Html::script('forAdmin/vendors/Flot/jquery.flot.js') !!}
    {{-- <script src="../vendors/Flot/jquery.flot.pie.js"></script> --}}
    {!! Html::script('forAdmin/vendors/Flot/jquery.flot.pie.js') !!}
    {{-- <script src="../vendors/Flot/jquery.flot.time.js"></script> --}}
    {!! Html::script('forAdmin/vendors/Flot/jquery.flot.time.js') !!}
    {{-- <script src="../vendors/Flot/jquery.flot.stack.js"></script> --}}
    {!! Html::script('forAdmin/vendors/Flot/jquery.flot.stack.js') !!}
    {{-- <script src="../vendors/Flot/jquery.flot.resize.js"></script> --}}
    {!! Html::script('forAdmin/vendors/Flot/jquery.flot.resize.js') !!}
    <!-- Flot plugins -->
    {{-- <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script> --}}
    {!! Html::script('forAdmin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') !!}
    {{-- <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/flot-spline/js/jquery.flot.spline.min.js') !!}
    {{-- <script src="../vendors/flot.curvedlines/curvedLines.js"></script> --}}
    {!! Html::script('forAdmin/vendors/flot.curvedlines/curvedLines.js') !!}
    <!-- DateJS -->
    {{-- <script src="../vendors/DateJS/build/date.js"></script> --}}
    {!! Html::script('forAdmin/vendors/DateJS/build/date.js') !!}
    <!-- JQVMap -->
    {{-- <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script> --}}
    {!! Html::script('forAdmin/vendors/jqvmap/dist/jquery.vmap.js') !!}
    {{-- <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script> --}}
    {!! Html::script('forAdmin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') !!}
    {{-- <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> --}}
    {!! Html::script('forAdmin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') !!}
    <!-- bootstrap-daterangepicker -->
    {{-- <script src="../vendors/moment/min/moment.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/moment/min/moment.min.js') !!}
    {{-- <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script> --}}
    {!! Html::script('forAdmin/vendors/bootstrap-daterangepicker/daterangepicker.js') !!}
     <!-- Datatables -->
    {{-- <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/datatables.net/js/jquery.dataTables.min.js') !!}
    {{-- <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
    {{-- <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') !!}
    {{-- <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') !!}
    {{-- <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/datatables.net-buttons/js/buttons.flash.min.js') !!}
    {{-- <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/datatables.net-buttons/js/buttons.html5.min.js') !!}
    {{-- <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/datatables.net-buttons/js/buttons.print.min.js') !!}
    {{-- <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') !!}
    {{-- <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') !!}
    {{-- <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') !!}
    {{-- <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script> --}}
    {!! Html::script('forAdmin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') !!}
    {{-- <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') !!}
    {{-- <script src="../vendors/jszip/dist/jszip.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/jszip/dist/jszip.min.js') !!}
    {{-- <script src="../vendors/pdfmake/build/pdfmake.min.js"></script> --}}
    {!! Html::script('forAdmin/vendors/pdfmake/build/pdfmake.min.js') !!}
    {{-- <script src="../vendors/pdfmake/build/vfs_fonts.js"></script> --}}
    {!! Html::script('forAdmin/vendors/pdfmake/build/vfs_fonts.js') !!}
    <!-- validator -->
    {{-- <script src="../vendors/validator/validator.js"></script> --}}
    {!! Html::script('forAdmin/vendors/validator/validator.js') !!}
    <!-- Custom Theme Scripts -->
    {{-- <script src="../build/js/custom.min.js"></script> --}}
    {!! Html::script('forAdmin/js/custom.min.js') !!}
    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    {{-- <script src="/server/js/vendor/jquery.ui.widget.js"></script> --}}
    {!! Html::script('server/js/vendor/jquery.ui.widget.js') !!}
    <!-- The Templates plugin is included to render the upload/download listings -->
    {{-- <script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script> --}}
    {!! Html::script('server/js/tmpl.min.js') !!}
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    {{-- <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script> --}}
    {!! Html::script('server/js/load-image.all.min.js') !!}
    <!-- The Canvas to  Blob plugin is included for image resizing functionality -->
    {{-- <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script> --}}
    {!! Html::script('server/js/canvas-to-blob.min.js') !!}
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
    {{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> --}}
    <!-- blueimp Gallery script -->
    {{-- <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script> --}}
    {!! Html::script('server/js/jquery.blueimp-gallery.min.js') !!}
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    {{-- <script src="/server/js/jquery.iframe-transport.js"></script> --}}
    {!! Html::script('server/js/jquery.iframe-transport.js') !!}
    <!-- The basic File Upload plugin -->
    {{-- <script src="/server/js/jquery.fileupload.js"></script> --}}
    {!! Html::script('server/js/jquery.fileupload.js') !!}
    <!-- The File Upload processing plugin -->
    {{-- <script src="/server/js/jquery.fileupload-process.js"></script> --}}
    {!! Html::script('server/js/jquery.fileupload-process.js') !!}
    <!-- The File Upload image preview & resize plugin -->
    {{-- <script src="/server/js/jquery.fileupload-image.js"></script> --}}
    {!! Html::script('server/js/jquery.fileupload-image.js') !!}
    <!-- The File Upload audio preview plugin -->
    {{-- <script src="/server/js/jquery.fileupload-audio.js"></script> --}}
    {!! Html::script('server/js/jquery.fileupload-audio.js') !!}
    <!-- The File Upload video preview plugin -->
    {{-- <script src="/server/js/jquery.fileupload-video.js"></script> --}}
    {!! Html::script('server/js/jquery.fileupload-video.js') !!}
    <!-- The File Upload validation plugin -->
    {{-- <script src="/server/js/jquery.fileupload-validate.js"></script> --}}
    {!! Html::script('server/js/jquery.fileupload-validate.js') !!}
    <!-- The File Upload user interface plugin -->
    {{-- <script src="/server/js/jquery.fileupload-ui.js"></script> --}}
    {!! Html::script('server/js/jquery.fileupload-ui.js') !!}
    <!-- The main application script -->
    {{-- <script src="/server/js/main.js"></script> --}}
    {!! Html::script('server/js/main.js') !!}
  </body>
</html>
