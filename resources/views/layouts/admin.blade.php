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
<!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('css/toggle.css')}}">
<!--===============================================================================================-->

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/toggle.css') }}" rel="stylesheet">
<link href="{{ asset('card/button.css') }}" rel="stylesheet"  type='text/css' />

    <title>Admin Page</title>
</head>
<body>
<div class="topgrad">
    @include('include.header')
    @include('include.navbar')
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel"  >
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <main>
        @yield('admin') 
    </main>
     @include('include.footer')
</div>
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
    <script src="PageDesign/daterangepicker/daterangepicker.js"></script>
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
</body>
</html>