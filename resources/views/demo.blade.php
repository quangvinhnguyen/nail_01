<!DOCTYPE HTML>
<!--
/*
 * jQuery File Upload Plugin Demo
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */
-->
<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>jQuery File Upload Demo</title>
<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
    {!! Html::style('forAdmin/vendors/bootstrap/dist/css/bootstrap.min.css') !!}
{{-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> --}}
{{-- <!-- Generic page styles -->
<link rel="stylesheet" href="/server/css/style.css">
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="/server/css/jquery.fileupload.css">
<link rel="stylesheet" href="/server/css/jquery.fileupload-ui.css"> --}}
<!-- CSS adjustments for browsers with JavaScript disabled -->
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
{{-- <noscript><link rel="stylesheet" href="/server/css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="/server/css/jquery.fileupload-ui-noscript.css"></noscript> --}}

</head>
<body>
<form action="/product" method="post">
    {{ csrf_field() }}
    Product name:
    <br />
    <input type="text" name="name" />
    <br /><br />
    Product photos (can add more than one):
    <br />
    <input type="file" id="fileupload" name="photos[]" data-url="/upload" multiple />
    <br />xóa
    <div id="files_list"></div>
    <p id="loading"></p>
    <input type="hidden" name="file_ids" id="file_ids" value="" />
    <input type="submit" value="Upload" />
</form>
 <script>
    $(function () {
        $('#fileupload').fileupload({
            dataType: 'json',
            add: function (e, data) {
                $('#loading').text('Uploading...');
                data.submit();
            },
            done: function (e, data) {
                $.each(data.result.files, function (index, file) {
                    $('<p/>').html(file.name + ' (' + file.size + ' KB)').appendTo($('#files_list'));
                    if ($('#file_ids').val() != '') {
                        $('#file_ids').val($('#file_ids').val() + ',');
                    }
                    $('#file_ids').val($('#file_ids').val() + file.fileID);
                });
                $('#loading').text('');
            }
        });
    });
</script>
    {!! Html::script('forAdmin/vendors/jquery/dist/jquery.min.js') !!}
{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
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
