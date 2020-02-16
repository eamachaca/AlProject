<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <title>Project</title>
    <meta name="keywords" content="Universh - Material Education, Events, News, Learning Centre & Kid School MultiPurpose HTML5 Template" />
    <meta name="description" content="Universh - Material Education, Events, News, Learning Centre & Kid School MultiPurpose HTML5 Template">
    <meta name="author" content="glorythemes.in">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <!--<link rel="shortcut icon" href="images/default/favicon.png">   Para el logo en navegador-->
    <!-- Web Fonts  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Lib CSS -->
    <link rel="stylesheet" href="{{asset('css/lib/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/lib/font-awesome.min.css')}}">
    @yield('head_structure')

</head>
<body>
@yield('body_structure')
<!-- library -->
<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/lib/bootstrap.min.js')}}"></script>
@yield('script_structure')
</body>
</html>
