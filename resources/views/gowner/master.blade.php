<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<head>
    <!-- Basic Meta Tags -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="ucorpora demo - Free Business Corporate HTML Template">
    <meta name="keywords" content="ucorpora, ucorpora demo, free, template, corporate, clean, modern, bootstrap, creative, design">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if (gte IE 9)|!(IE)]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <![endif]-->

    <!-- Favicon -->
    <link href="{{URL::asset('frontEnd/img')}}/favicon.ico" rel="icon" type="image/png">

    <!-- Styles -->
    <link href="{{URL::asset('frontEnd/css/styles.css')}}" rel="stylesheet">
    <link href="{{URL::asset('frontEnd/css/bootstrap-override.css')}}" rel="stylesheet">

    <!-- Font Avesome Styles -->
    <link href="{{URL::asset('frontEnd/css/font-awesome/font-awesome.css')}}" rel="stylesheet">
    <!--[if IE 7]>
    <link href="{{URL::asset('frontEnd/css/font-awesome/font-awesome-ie7.min.css')}}" rel="stylesheet">
    <![endif]-->

    <!-- FlexSlider Style -->
    <link rel="stylesheet" href="{{asset('frontEnd/css/flexslider.css')}}" type="text/css" media="screen">

    <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<!-- Header -->
@include('gowner.includes.header')
<!-- Header End -->
<!-- Content -->
@yield('mainContent')
<!-- Content End -->

<!-- Footer -->
@include('gowner.includes.footer')
<!-- Footer End -->

<!-- JavaScripts -->
<script type="text/javascript" src="{{asset('frontEnd/js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/functions.js')}}"></script>
<script type="text/javascript" defer src="{{asset('frontEnd/js/jquery.flexslider.js')}}"></script>

</body>
</html>
