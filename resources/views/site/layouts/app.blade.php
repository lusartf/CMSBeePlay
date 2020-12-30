<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
