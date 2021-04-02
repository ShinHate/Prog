<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delway</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/font-awesome.min.css") }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset("assets/style.css") }}">
</head>
<body>
<header class="site-header">
    <div class="site-branding">
        <h1 class="site-title"><a href="/" rel="home"><img src="{{ asset("assets/images/Logo3.png") }}" alt="Logo"></a></h1>
    </div><!-- .site-branding -->

    <div class="hamburger-menu">
        <div class="menu-icon">
            <img src="{{ asset("assets/images/menu-icon.png") }}" alt="menu icon">
        </div><!-- .menu-icon -->

        <div class="menu-close-icon">
            <img src="{{ asset("assets/images/x.png") }}" alt="menu close icon">
        </div><!-- .menu-close-icon -->
    </div><!-- .hamburger-menu -->
</header><!-- .site-header -->

@include("layouts.components.nav")
<div class="outer-container blog-page">
    <div class="container-fluid">
            @yield('main')

    </div><!-- .container-fluid -->
</div><!-- .outer-container -->

{{--<div class="scroll-down flex flex-column justify-content-center align-items-center d-none d-lg-block">--}}
{{--    <span class="arrow-down flex justify-content-center align-items-center"><img src="assets/images/arrow-down.png" alt="arrow"></span>--}}
{{--    <span class="scroll-text">Scroll Down</span>--}}
{{--</div><!-- .scroll-down -->--}}

<script type='text/javascript' src='{{ asset("assets/js/jquery.js") }}'></script>
<script type='text/javascript' src='{{ asset("assets/js/custom.js") }}'></script>

</body>
</html>
