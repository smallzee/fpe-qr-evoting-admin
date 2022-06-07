<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>{{ $page_title }} - {{ getenv('APP_NAME') }}</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="{{image_url('logo.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{image_url('logo.png')}}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/css/bootstrap.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/css/font-awesome.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/css/animate.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/css/owl.carousel.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/css/slick.css')}}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/css/off-canvas.css')}}">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/fonts/linea-fonts.css')}}">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/fonts/flaticon.css')}}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/css/magnific-popup.css')}}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{asset('assets/libs/css/rsmenu-main.css')}}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/css/rs-spacing.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/css/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/css/responsive.css')}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="home-style2">

<!--Preloader area start here-->
<div id="loader" class="loader">
    <div class="loader-container">
        <div class='loader-icon'>
            <img src="{{image_url('logo.png')}}" alt="">
        </div>
    </div>
</div>
<!--Preloader area End here-->

@include('layouts.header')


<!-- Main content Start -->
<div class="main-content">
    @stack('content')
</div>

@include('layouts.footer')

<!-- modernizr js -->
<script src="{{asset('assets/libs/js/modernizr-2.8.3.min.js')}}"></script>
<!-- jquery latest version -->
<script src="{{asset('assets/libs/js/jquery.min.js')}}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{asset('assets/libs/js/bootstrap.min.js')}}"></script>
<!-- Menu js -->
<script src="{{asset('assets/libs/js/rsmenu-main.js')}}"></script>
<!-- op nav js -->
<script src="{{asset('assets/libs/js/jquery.nav.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('assets/libs/js/owl.carousel.min.js')}}"></script>
<!-- Slick js -->
<script src="{{asset('assets/libs/js/slick.min.js')}}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{asset('assets/libs/js/isotope.pkgd.min.js')}}"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{asset('assets/libs/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('assets/libs/js/wow.min.js')}}"></script>
<!-- Skill bar js -->
<script src="{{asset('assets/libs/js/skill.bars.jquery.js')}}"></script>
<script src="{{asset('assets/libs/js/jquery.counterup.min.js')}}"></script>
<!-- counter top js -->
<script src="{{asset('assets/libs/js/waypoints.min.js')}}"></script>
<!-- video js -->
<script src="{{asset('assets/libs/js/jquery.mb.YTPlayer.min.js')}}"></script>
<!-- magnific popup js -->
<script src="{{asset('assets/libs/js/jquery.magnific-popup.min.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('assets/libs/js/plugins.js')}}"></script>
<!-- contact form js -->
<script src="{{asset('assets/libs/js/contact.form.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/libs/js/main.js')}}"></script>
</body>
</html>
