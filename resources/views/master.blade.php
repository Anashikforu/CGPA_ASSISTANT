<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>MY Assistant</title>
  
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="apple-touch-icon" href="{{ asset('/') }}/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="https://getbootstrapadmin.com/remark/base/assets/images/favicon.ico">
  <style type="text/css">
    .select2-container {
      height: 40px !important;
      width: 100% !important;
  }
  </style>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('assets') }}/global/css/bootstrap.min599c.css?v4.0.2">
  <link rel="stylesheet" href="{{ asset('assets') }}/global/css/bootstrap-extend.min599c.css?v4.0.2">
  <link rel="stylesheet" href="{{ asset('/') }}assets/css/site.min599c.css?v4.0.2">

  <!-- Plugins -->
  <link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/animsition/animsition.min599c.css?v4.0.2">
  <link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2">
  <link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/switchery/switchery.min599c.css?v4.0.2">
  <link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/intro-js/introjs.min599c.css?v4.0.2">
  <link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2">
  <link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/chartist/chartist.min599c.css?v4.0.2">
  <link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/aspieprogress/asPieProgress.min599c.css?v4.0.2">
  <link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min599c.css?v4.0.2">

  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('/') }}assets/examples/css/dashboard/ecommerce.min599c.css?v4.0.2">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('assets') }}/global/fonts/web-icons/web-icons.min599c.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/global/fonts/brand-icons/brand-icons.min599c.css">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

  <link rel="stylesheet" href="{{ asset('assets') }}/global/fonts/font-awesome/font-awesome.min599c.css">

  <!--[if lt IE 9]>
    <script src="{{ asset('assets') }}/global/vendor/html5shiv/html5shiv.min.js?v4.0.2"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="{{ asset('assets') }}/global/vendor/media-match/media.match.min.js?v4.0.2"></script>
    <script src="{{ asset('assets') }}/global/vendor/respond/respond.min.js?v4.0.2"></script>
    <![endif]-->
  @stack('css')
  <!-- Scripts -->
  <script src="{{ asset('assets') }}/global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="animsition ecommerce_dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @include('admin.header')
  
    @include('admin.aside')

    @yield('content')

    @include('admin.footer')

    @stack('js')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <script>
      $(document).ready(function() {
          $('.js-example-basic-single').select2();
      });
    </script>
  
</body>


</html>