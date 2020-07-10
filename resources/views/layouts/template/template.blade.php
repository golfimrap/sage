<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>คณะที่ปรึกษารัฐมนตรีว่าการกระทรวงสาธารณสุข</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="{{URL::asset('site.webmanifest')}}"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('assets/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">

    @yield('timelinecss')
</head>
<body class="body-bg">
	@include('layouts.menubar.menu')
	@yield('content')
	@include('layouts.template.footer')
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{URL::asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{URL::asset('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{URL::asset('./assets/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('./assets/js/bootstrap.min.js')}}"></script>

    <!-- Jquery Mobile Menu -->
    <script src="{{URL::asset('./assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{URL::asset('./assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('./assets/js/slick.min.js')}}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{URL::asset('./assets/js/wow.min.js')}}"></script>
    <script src="{{URL::asset('./assets/js/animated.headline.js')}}"></script>
    <script src="{{URL::asset('./assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{URL::asset('./assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{URL::asset('./assets/js/jquery.sticky.js')}}"></script>

    <!-- contact js -->
    <script src="{{URL::asset('./assets/js/contact.js')}}"></script>
    <script src="{{URL::asset('./assets/js/jquery.form.js')}}"></script>
    <script src="{{URL::asset('./assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{URL::asset('./assets/js/mail-script.js')}}"></script>
    <script src="{{URL::asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{URL::asset('./assets/js/plugins.js')}}"></script>
    <script src="{{URL::asset('./assets/js/main.js')}}"></script>
</body>
</html>