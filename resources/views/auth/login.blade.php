@extends('layouts.Login_layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images_Login/icons/clipboard.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css_Login/util.css">
	<link rel="stylesheet" type="text/css" href="css_Login/main.css">
<!--===============================================================================================-->
</head>
<!-- Login Div -->
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images_Login/bg-01.jpg);">
					<span class="login100-form-title-1">
                    {{ __('Take your time to Login😎🆒😎') }}
					</span>
                </div>
            <!-- Email Address Section within Div -->
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                     @csrf
                        <div class="wrap-input100 validate-input m-b-26" data-validate="E-Mail is required">
                            <span for="email" class="label-input100">{{ __('E-Mail Address') }}</span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                            required autocomplete="email" placeholder="Enter E-Mail">
                            <span class="focus-input100"></span>
                            @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                    </div>
            <!-- End of E-Mail Address Section  -->

            <!-- Password Section Within Login Div -->

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">{{ __('Password') }}</span>
						<input id="password"  class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
            <!-- End of Password Section -->

            <!-- Remember Me button -->
            <div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input  class="input-checkbox100" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} >
							<label class="label-checkbox100" for="remember" >
                                {{ __('Remember Me') }}
							</label>
						</div>
        <!-- End of Remember Me Button -->

        <!-- Forget Password  -->
						<div>
                            @if (Route::has('password.request'))
                                <a href= "{{ route('password.request') }}" class="txt1">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
            </div>
        <!-- End of Forget Password -->

        <!-- Login Button -->
                        <div class="container-login100-form-btn">
                                        <button type="submit"  class="login100-form-btn">
                                        {{ __('Login') }}
                                        </button>
                        </div>
        <!-- End of Login Button Section -->
            </form>                        
        </div>
    </div>
</div>
@endsection
