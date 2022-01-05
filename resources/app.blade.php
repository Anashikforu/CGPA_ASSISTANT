<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/base/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Feb 2021 12:06:17 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stock Management System - Book Line BD</title>

    <link rel="apple-touch-icon" href="{{ asset('') }}/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="https://getbootstrapadmin.com/remark/base/assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('/assets') }}/global/css/bootstrap.min599c.css?v4.0.2">
    <link rel="stylesheet" href="{{ asset('/assets') }}/global/css/bootstrap-extend.min599c.css?v4.0.2">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/site.min599c.css?v4.0.2">

    <!-- Skin tools (demo site only) -->
    <link rel="stylesheet" href="{{ asset('/assets') }}/global/css/skintools.min599c.css?v4.0.2">
    <script src="{{ asset('/') }}assets/js/Plugin/skintools.min599c.js?v4.0.2"></script>

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('/assets') }}/global/vendor/animsition/animsition.min599c.css?v4.0.2">
    <link rel="stylesheet" href="{{ asset('/assets') }}/global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2">
    <link rel="stylesheet" href="{{ asset('/assets') }}/global/vendor/switchery/switchery.min599c.css?v4.0.2">
    <link rel="stylesheet" href="{{ asset('/assets') }}/global/vendor/intro-js/introjs.min599c.css?v4.0.2">
    <link rel="stylesheet" href="{{ asset('/assets') }}/global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2">
    <link rel="stylesheet" href="{{ asset('/assets') }}/global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2">

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/examples/css/pages/login.min599c.css?v4.0.2">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('/assets') }}/global/fonts/web-icons/web-icons.min599c.css?v4.0.2">
    <link rel="stylesheet" href="{{ asset('/assets') }}/global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2">
    <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">


    <!--[if lt IE 9]>
    <script src="{{ asset('/assets') }}/global/vendor/html5shiv/html5shiv.min.js?v4.0.2"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{ asset('/assets') }}/global/vendor/media-match/media.match.min.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/vendor/respond/respond.min.js?v4.0.2"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{ asset('/assets') }}/global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="animsition page-login layout-full page-dark">
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
        <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
            <div class="brand">
                <img class="brand-img" src="{{ asset('/') }}assets/images/logo.png" alt="...">
                <h2 class="brand-text">BOOKLINE BD</h2>
            </div>
            <main class="py-4">
                @yield('content')
            </main>

            <footer class="page-copyright page-copyright-inverse">
                <p>WEBSITE BY TimeLead Solutions</p>
                <p>© 2020. All RIGHT RESERVED.</p>
                <div class="social">
                    <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                        <i class="icon bd-twitter" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                        <i class="icon bd-facebook" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                        <i class="icon bd-dribbble" aria-hidden="true"></i>
                    </a>
                </div>
            </footer>
        </div>
    </div>



    <!-- Core  -->
    <script src="{{ asset('/assets') }}/global/vendor/babel-external-helpers/babel-external-helpers599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/vendor/jquery/jquery.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/vendor/popper-js/umd/popper.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/vendor/bootstrap/bootstrap.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/vendor/animsition/animsition.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/vendor/mousewheel/jquery.mousewheel599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/vendor/asscrollbar/jquery-asScrollbar.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/vendor/asscrollable/jquery-asScrollable.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js?v4.0.2"></script>

    <!-- Plugins -->
    <script src="{{ asset('/assets') }}/global/vendor/switchery/switchery.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/vendor/intro-js/intro.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/vendor/screenfull/screenfull599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/vendor/slidepanel/jquery-slidePanel.min599c.js?v4.0.2"></script>

    <!-- Plugins For This Page -->
    <script src="{{ asset('/assets') }}/global/vendor/jquery-placeholder/jquery.placeholder599c.js?v4.0.2"></script>

    <!-- Scripts -->
    <script src="{{ asset('/assets') }}/global/js/Component.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/js/Plugin.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/js/Base.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/js/Config.min599c.js?v4.0.2"></script>

    <script src="{{ asset('/') }}assets/js/Section/Menubar.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/') }}assets/js/Section/GridMenu.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/') }}assets/js/Section/Sidebar.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/') }}assets/js/Section/PageAside.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/') }}assets/js/Plugin/menu.min599c.js?v4.0.2"></script>

    <!-- Config -->
    <script src="{{ asset('/assets') }}/global/js/config/colors.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/') }}assets/js/config/tour.min599c.js?v4.0.2"></script>
    
    <!-- Page -->
    <script src="{{ asset('/') }}assets/js/Site.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/js/Plugin/asscrollable.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/js/Plugin/slidepanel.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/js/Plugin/switchery.min599c.js?v4.0.2"></script>
    <script src="{{ asset('/assets') }}/global/js/Plugin/jquery-placeholder.min599c.js?v4.0.2"></script>
    <script>
        (function(document, window, $) {
            'use strict';

            var Site = window.Site;
            $(document).ready(function() {
                Site.run();
            });
        })(document, window, jQuery);
    </script>


    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js',
            'ga');

        ga('create', 'UA-65522665-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>
