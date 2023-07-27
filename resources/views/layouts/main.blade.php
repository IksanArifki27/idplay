<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.rateyo.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mmenu.all.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/meanmenu.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/inner-page-style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">

    <title>Internet</title>
  </head>
  <body>
    @include('layouts.header')

    <!-- ===========Hero Section===================== -->

    @yield('content')

    @include('layouts.footer')

    <!-- JS -->
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/lightbox.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/all.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/isotope.pkgd.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.rateyo.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.mmenu.all.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
  </body>
</html>
