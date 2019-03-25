@extends('layouts.login')
@section('home')
	<div class="limiter">
		<div class="container-login100">	
			<div class="wrap-login100">
					<form class="login100-form validate-form" method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                        @csrf
					<h5 class="login100-form-title p-b-26" style="color: green">Login(EMS)</h5>
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a-z@mail.com">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="{{ __('E-Mail') }}">
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye-off"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password">
						</span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn">
							</div>
							<button type="submit" class="login100-form-btn">
                                    {{ __('Login') }}
                                </button>
						</div>
					</div>
					<div class="text-center p-t-115">
						<span class="txt1">
							<br>Don’t know an account password?Please click below!
						</span>  
                                    <a class="login100-form-btn" href="/forget" style="font-size: 30px;">{{ __('Forgot Password') }}
                           			</a>
                                    
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection