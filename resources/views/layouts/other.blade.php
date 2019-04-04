<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.png')}}"/>
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
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('css/nav.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/toggle.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('css/manage/bootstrap.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('css/manage/bootstrap.min.js')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('css/manage/css.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('css/manage/font-awesome.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('css/manage/icon.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('css/manage/jquery.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('css/manage/main.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('css/views/bootstrap.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('css/views/bootstrap.min.js')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/views/main.css')}}">
<!--===============================================================================================-->
<!-- Bootstrap Core CSS -->
<link href="{{asset('web/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="{{asset('web/css/font-awesome.css')}}" rel="stylesheet"> 

<!-- //jQuery -->
<link href="{{asset('web/css/extra.css')}}" rel='stylesheet' type='text/css'/>

<!-- lined-icons -->
<link rel="stylesheet" href="{{asset('web/css/icon-font.min.css')}}" type='text/css' />
<!-- //lined-icons -->



	<title>Admin Page</title>
</head>
<body class="topgrad">
	@include('include.navbar') 
	<main>
        @yield('other')
    </main>
<!--===============================================================================================-->
	<script src="{{asset('PageDesign/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('PageDesign/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('PageDesign/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('PageDesign/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('PageDesign/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('PageDesign/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('PageDesign/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('PageDesign/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('js/nav.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('js/materialize.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('js/toggle.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>
	<!--===============================================================================================-->
	<!--js -->
<script src="{{asset('web/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('web/js/scripts.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="{{asset('web/js/raphael-min.js')}}"></script>
<script src="{{asset('web/js/morris.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('web/js/jquery-2.1.4.min.js')}}"></script>

</body>
</html>