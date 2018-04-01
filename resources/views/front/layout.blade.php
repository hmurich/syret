<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="GARO is a real-estate template">
    <meta name="author" content="Kimarotec">
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="/front/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/front/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="/front/assets/css/normalize.css">
    <link rel="stylesheet" href="/front/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/front/assets/css/fontello.css">
    <link href="/front/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="/front/assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
    <link href="/front/assets/css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/front/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/front/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/front/assets/css/icheck.min_all.css">
    <link rel="stylesheet" href="/front/assets/css/price-range.css">
    <link rel="stylesheet" href="/front/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/front/assets/css/owl.theme.css">
    <link rel="stylesheet" href="/front/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="/front/assets/css/style.css">
    <link rel="stylesheet" href="/front/assets/css/responsive.css">

    <style>
        .alert {
            margin-top: 15px;
        }
    </style>
    @section('css_block')
    @show
</head>
<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Body content -->

    @include('front.__include.top_navbar')
    @include('front.__include.message')

    @yield('content')

    @include('front.__include.footer')

    <script src="/front/assets/js/modernizr-2.6.2.min.js"></script>
    <script src="/front/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/front/bootstrap/js/bootstrap.min.js"></script>
    <script src="/front/assets/js/bootstrap-select.min.js"></script>
    <script src="/front/assets/js/bootstrap-hover-dropdown.js"></script>
    <script src="/front/assets/js/easypiechart.min.js"></script>
    <script src="/front/assets/js/jquery.easypiechart.min.js"></script>
    <script src="/front/assets/js/owl.carousel.min.js"></script>
    <script src="/front/assets/js/wow.js"></script>
    <script src="/front/assets/js/icheck.min.js"></script>
    <script src="/front/assets/js/price-range.js"></script>
    <script src="/front/assets/js/main.js"></script>
    @section('js_block')
    @show
</body>
</html>
