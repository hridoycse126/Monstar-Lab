@extends('layouts.login')
@section('home')
	<div class="limiter">
		<div class="container-login100">	
			<div class="wrap-login100">
					<form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
						@csrf
					<h5 class="login100-form-title p-b-26" style="color: green">Enter</h5>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
					<h5 class="login100-form-title p-b-26" style="color: green">Email Address</h5>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Show Password To Admin
							</button>
						</div>
					</div>
					<div class="text-center p-t-115">
						<span class="txt1">
							Have an account?Please click here below!
						</span>
							<a href="login" class="login100-form-btn" style="font-size: 50px">Login</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection