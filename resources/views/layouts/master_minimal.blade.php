<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 09/03/2016
 * Time: 0:02
 */
?>

        <!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{URL('template_minimal/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{URL('template_minimal/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{ URL('template_minimal/css/font-awesome.css') }}" rel="stylesheet">
    <script src="{{ URL('template_minimal/js/jquery.min.js') }}"> </script>
</head>
<body>
<div id="wrapper">
@include('includes.header')
       @yield('content')
</div>
<!--scrolling js-->
<script src="{{ URL('template_minimal/js/jquery.nicescroll.js') }}"></script>
<script src="{{ URL('template_minimal/js/scripts.js') }}"></script>
<!--//scrolling js-->
<script src="{{ URL('template_minimal/js/bootstrap.min.js') }}"> </script>
<script src="{{URL('src/js/app.js')}}"></script>
</body>
</html>
