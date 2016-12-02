<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title' , 'Page Title')</title>

    <!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap (PRO Version) -->
    <link rel="stylesheet" href="assets/MDBootstrap/css/mbd.pro.min.css">
	
	<!-- Jquery ScrollUp -->
	<link rel="stylesheet" href="assets/scrollup/scrollUp.css">
	
	<!-- Jquery PrettyPhoto -->
	<link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">

	<!-- Theme styles -->
	<link rel="stylesheet" href="style.css">
</head>
<body class="grey-bg" data-theme-color-scheme="primary-color-dark">

<!--================================================================== 
        Theme switcher Start
    ==================================================================  -->

@include('partials.theme_switcher')

<!--================================================================== 
        Theme switcher end
    ==================================================================  -->





<!--================================================================== 
    Navbar Start
==================================================================  -->

@include('partials.navbar')

<!--================================================================== 
        Navbar end
    ==================================================================  -->


@yield('under-nav')


<!--================================================================== 
        Page content area start
    ==================================================================  -->
<main class="page-content {{ isset($main_container_class) ? $main_container_class : 'pt-80' }}">
    @yield('page-content')
</main>
<!--================================================================== 
        Page content area end
    ==================================================================  -->




<!--================================================================== 
        Footer area 
    ==================================================================  -->
@include('partials.footer')


