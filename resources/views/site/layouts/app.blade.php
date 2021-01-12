<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- =======================================================================================-->
    <!-- =========================================PWA===========================================-->

    <!--Se llama la funcion de la pwa -->
    @laravelPWA

    <!--ServiceWorwer -->
     <!-- Web Application Manifest -->
    <link rel="manifest" href="/manifest.json">
    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#000000">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="PWA">
    <link rel="icon" sizes="512x512" href="/CMSBeePlay/public/images/icons/icon-512x512.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PWA">
    <link rel="apple-touch-icon" href="/CMSBeePlay/public/images/icons/icon-512x512.png">

    <link href="/CMSBeePlay/public/images/icons/splash-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/CMSBeePlay/public/images/icons/splash-750x1334.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/CMSBeePlay/public/images/icons/splash-1242x2208.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/CMSBeePlay/public/images/icons/splash-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/CMSBeePlay/public/images/icons/splash-828x1792.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/CMSBeePlay/public/images/icons/splash-1242x2688.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/CMSBeePlay/public/images/icons/splash-1536x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/CMSBeePlay/public/images/icons/splash-1668x2224.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/CMSBeePlay/public/images/icons/splash-1668x2388.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/CMSBeePlay/public/images/icons/splash-2048x2732.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

        <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/CMSBeePLay/public/images/icons/icon-512x512.png">

    <script type="text/javascript">
    if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/CMSBeePlay/public/serviceworker.js').then(function(registration) {
        // Registration was successful
        console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
        // registration failed :(
        console.log('ServiceWorker registration failed: ', err);
        });
    });
    }
    </script>
     <!-- =======================================================================================-->


    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    
  
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_files/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_files/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_files/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login_files/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_files/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_files/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login_files/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_files/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login_files/css/main.css')}}">

    

    <style>
        #login{
            background-color: rgba(214, 241, 245, 0.199);
        }
    </style>

    <!-- plugin js Sweet alert para mensaje emergentes -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('login_files/js/cryptoJS.js')}}"></script>
    <script src="{{ asset('login_files/js/functions.js')}}"></script>
    
</head>
<body>
         
    @if (session()->has('flash'))
        <div class="alert alert-info">
            {{ session('flash') }}
        </div>    
    @endif

    @if (Cookie::get('status') == 200)
        <!-- Si es usuario valido agrega Navbar --> 
        @include('layouts.partials.navbar')
    @endif    
    
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    

    <!--===============================================================================================-->
	<!--script src="vendor/jquery/jquery-3.2.1.min.js"></script-->
    <!--===============================================================================================-->
        <script src="login_files/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="login_files/vendor/bootstrap/js/popper.js"></script>
        <!--script src="vendor/bootstrap/js/bootstrap.min.js"></script-->
    <!--===============================================================================================-->
        <script src="login_files/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="login_files/vendor/daterangepicker/moment.min.js"></script>
        <script src="login_files/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="login_files/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="login_files/js/main.js"></script>
    


    {{-- @include('sweet::alert') --}}

</body>
</html>
