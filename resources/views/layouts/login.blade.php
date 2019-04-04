<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon1.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('PageDesign/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('PageDesign/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('PageDesign/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('PageDesign/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('PageDesign/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('PageDesign/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('css/grad.css')}}">
	<link rel="stylesheet" type="text/css" href="css/web.css">
<!--===============================================================================================-->



	<title>Monstar-LAB System</title>
</head>
<body class="topgrad">
	<div style="height: 50px"> 
    	<h2>
    		<marquee direction="left">
    			<b>Welcome To Monstar-LAB System<b>
    		</marquee>
    	</h2>	
    </div>
	<main>
        @yield('home')
    </main>
    <div  style="font-style: italic;">@include('include.footer')</div>
<!--===============================================================================================-->
	<script src="PageDesign/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="PageDesign/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="PageDesign/bootstrap/js/popper.js"></script>
	<script src="PageDesign/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="PageDesign/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="PageDesign/daterangepicker/moment.min.js"></script>
<!--===============================================================================================-->
	<script src="PageDesign/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="PageDesign/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!--===============================================================================================-->
	
</body>
</html>