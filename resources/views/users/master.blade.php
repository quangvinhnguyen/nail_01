<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Luxury Nail - Welcome</title>
    <link rel="shortcut icon" href="/images/1.png" type="image/png">
    <!--<link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    {!! Html::style('user/scripts/bootstrap/css/bootstrap.min.css') !!}
    <!--<link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">-->
    {!! Html::style('user/scripts/bootstrap/css/bootstrap-responsive.min.css') !!}

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <!--<link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  -->
    {!! Html::style('user/scripts/icons/general/stylesheets/general_foundicons.css') !!}
    <!--<link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />-->
    {!! Html::style('user/scripts/icons/social/stylesheets/social_foundicons.css') !!}
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--<link href="css/docs.css" rel="stylesheet">-->
    {!! Html::style('user/css/docs.css') !!}
    <!--<link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">-->
    {!! Html::style('user/scripts/fontawesome/css/font-awesome.min.css') !!}
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <!--<link href="scripts/carousel/style.css" rel="stylesheet" type="text/css" />-->
    {!! Html::style('user/scripts/carousel/style.css') !!}
    <!--<link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />-->
    {!! Html::style('user/scripts/camera/css/camera.css') !!}
    <!--<link href="scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" />-->
    {!! Html::style('user/scripts/wookmark/css/style.css') !!}
    <!--<link href="scripts/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css" />-->
    {!! Html::style('user/scripts/prettyphoto/css/prettyPhoto.css') !!}

    <!--<link href="http://fonts.googleapis.com/css?family=Allura" rel="stylesheet" type="text/css">-->
    {!! Html::style('http://fonts.googleapis.com/css?family=Allura') !!}
    <!--<link href="http://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet" type="text/css">-->
    {!! Html::style('http://fonts.googleapis.com/css?family=Aldrich') !!}
    <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">-->
    {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans') !!}
    <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">-->
    {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans') !!}
    <!--<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">-->
    {!! Html::style('http://fonts.googleapis.com/css?family=Pacifico') !!}
    <!--<link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">-->
    {!! Html::style('http://fonts.googleapis.com/css?family=Palatino+Linotype') !!}
    <!--<link href="http://fonts.googleapis.com/css?family=Calligraffitti" rel="stylesheet" type="text/css">-->
    {!! Html::style('http://fonts.googleapis.com/css?family=Calligraffitti') !!}
    <!--<link href="styles/custom.css" rel="stylesheet" type="text/css" />-->
    {!! Html::style('user/styles/custom.css') !!}
</head>
<body id="pageBody">
    <div id="decorative2">
        <div class="container">
            <div class="divPanel topArea notop nobottom">
                <div class="row-fluid">
                    <div class="span12">
                        <div id="divLogo" class="pull-left">
                            <a href="/" id="divSiteTitle">Luxury Nail</a><br />
                            <a href="/" id="divTagLine">Your Tag Line Here</a>
                        </div>
                        <div id="divMenuRight" class="pull-right">
                            <div class="navbar">
                                <button type="button" 
                                    class="btn btn-navbar-highlight btn-large btn-primary" 
                                    data-toggle="collapse" 
                                    data-target=".nav-collapse">
                                    NAVIGATION 
                                    <span class="icon-chevron-down icon-white"></span>
                                </button>
                                <div class="nav-collapse collapse">
                                    <ul class="nav nav-pills ddmenu">
                                        <li class="dropdown "><a href="/">Home</a></li>
                                        <li class="dropdown"><a href="about.ejs">About</a></li>
                                        <li class="dropdown"><a href="service">Services</a></li>
                                        <li class="dropdown">
                                            <a href="" class="dropdown-toggle">Page <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="full.ejs">Full Page</a></li>
                                                <li><a href="2-column.ejs">Two Column</a></li>
                                                <li><a href="3-column.ejs">Three Column</a></li>
                                                <li><a href="../documentation/index.ejs">Documentation</a></li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle">Dropdown Item &nbsp;&raquo;</a>
                                                    <ul class="dropdown-menu sub-menu">
                                                        <li><a href="#">Dropdown Item</a></li>
                                                        <li><a href="#">Dropdown Item</a></li>
                                                        <li><a href="#">Dropdown Item</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="gallery">Gallery</a></li>
                                        <li class="dropdown"><a href="contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    @include('users.blocks.footer')

    <!--<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>-->
    {!! Html::script('http://platform.twitter.com/widgets.js') !!}
    <!--<script src="scripts/jquery.min.js" type="text/javascript"></script> -->
    {!! Html::script('user/scripts/jquery.min.js') !!}
    <!--<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>-->
    {!! Html::script('user/scripts/bootstrap/js/bootstrap.min.js') !!}
    <!--<script src="js/bootstrap-transition.js"></script>-->
    {!! Html::script('user/js/bootstrap-transition.js') !!}
    <!--<script src="js/bootstrap-alert.js"></script>-->
    {!! Html::script('user/js/bootstrap-alert.js') !!}
    <!--<script src="js/bootstrap-modal.js"></script>-->
    {!! Html::script('user/js/bootstrap-modal.js') !!}
    <!--<script src="js/bootstrap-dropdown.js"></script>-->
    {!! Html::script('user/js/bootstrap-dropdown.js') !!}
    <!--<script src="js/bootstrap-scrollspy.js"></script>-->
    {!! Html::script('user/js/bootstrap-scrollspy.js') !!}
    <!--<script src="js/bootstrap-tab.js"></script>-->
    {!! Html::script('user/js/bootstrap-tab.js') !!}
    <!--<script src="js/bootstrap-tooltip.js"></script>-->
    {!! Html::script('user/js/bootstrap-tooltip.js') !!}
    <!--<script src="js/bootstrap-popover.js"></script>-->
    {!! Html::script('user/js/bootstrap-popover.js') !!}
    <!--<script src="js/bootstrap-button.js"></script>-->
    {!! Html::script('user/js/bootstrap-button.js') !!}
    <!--<script src="js/bootstrap-collapse.js"></script>-->
    {!! Html::script('user/js/bootstrap-collapse.js') !!}
    <!--<script src="js/bootstrap-carousel.js"></script>-->
    {!! Html::script('user/js/bootstrap-carousel.js') !!}
    <!--<script src="js/bootstrap-typeahead.js"></script>-->
    {!! Html::script('user/js/bootstrap-typeahead.js') !!}
    <!--<script src="js/bootstrap-affix.js"></script>-->
    {!! Html::script('user/js/bootstrap-affix.js') !!}
    <!--<script src="scripts/default.js" type="text/javascript"></script>-->
    {!! Html::script('user/scripts/default.js') !!}
    <!--<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>-->
    {!! Html::script('user/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js') !!}
    <!--<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>-->
    {!! Html::script('user/scripts/wookmark/js/jquery.wookmark.js') !!}
    <script type="text/javascript">
        $('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });
    </script>
    <!--<script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>-->
    {!! Html::script('user/scripts/camera/scripts/camera.min.js') !!}
    <!--<script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>-->
    {!! Html::script('user/scripts/easing/jquery.easing.1.3.js') !!}
    <script type="text/javascript">
        function startCamera() {
            $('#camera_wrap').camera({
                fx: 'scrollLeft',
                time: 2000,
                loader: 'none',
                playPause: false,
                navigation: true,
                height: '65%',
                pagination: true
            });
        }
        $(function() {
            startCamera()
        });
    </script>
    <script type="text/javascript">
        $(window).load(function() {
            var options = {
                autoResize: true,
                container: $('#gridArea'),
                offset: 10
            };
            var handler = $('#tiles li');
            handler.wookmark(options);
            $('#tiles li').each(function() {
                var imgm = 0;
                if ($(this).find('img').length > 0) imgm = parseInt($(this).find('img').not('p img').css('margin-bottom'));
                var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;
                if ($(this).find('iframe').height()) newHeight = newHeight + 15;
                $(this).css('height', newHeight + 'px');
            });
            handler.wookmark(options);
            handler.wookmark(options);
        });
    </script>
    <!--<script src="scripts/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>-->
    {!! Html::script('user/scripts/prettyphoto/js/jquery.prettyPhoto.js') !!}
    <script type="text/javascript">
        $("a[rel^='prettyPhoto']").prettyPhoto({
            social_tools: false
        });
        $("a[rel^='prettyPhoto'] img").hover(function() {
            $(this).animate({
                opacity: 0.7
            }, 300)
        }, function() {
            $(this).animate({
                opacity: 1
            }, 300)
        });
    </script>

    <!--<script src="js/holder/holder.js"></script>-->
    {!! Html::script('user/js/holder/holder.js') !!}
    <!--<script src="js/google-code-prettify/prettify.js"></script>-->
    {!! Html::script('user/js/google-code-prettify/prettify.js') !!}
    <!--<script src="js/application.js"></script>-->
    {!! Html::script('user/js/application.js') !!}
</body>
</html>
