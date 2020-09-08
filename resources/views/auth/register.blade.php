@extends('layouts.Login_layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images_Login/icons/favicon.ico"/>
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
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images_Login/bg-01.jpg);">
					<span class="login100-form-title-1">
						Its time to register yourself😉😎
					</span>
                </div>
<!-- Start of Form -->
                <form method="POST"  action="{{ route('register') }}" class="login100-form validate-form">
                    @csrf
        <!-- Full Name -->
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Your name is required!">
                            <span for="name" class="label-input100">{{ __('Name') }}</span>
                            <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter your Full Name">
                            <span class="focus-input100"></span>
                            @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
         <!-- End of Full Name -->

        <!-- Start of E-Mail address Section -->                
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span for="email" class="label-input100">{{ __('E-Mail Address') }}</span>
                       	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter E-Mail">
                        <span class="focus-input100"></span>
                            @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
					</div>
        <!-- End of Email Address Section -->

        <!-- Role field Added -->
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span for="role" class="label-input100">{{ __('Role') }}</span>
                                <select name="role" class="input100">
                                   
                                        <option disabled selected>Select Your role</option>
                                        <option value=1>Admin</option>
                                        <option value=2>General User</option>
                                </select>
                                <span class="focus-input100"></span>
					</div>
        <!-- End of Role field -->

        <!-- Password Field -->
                        <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                            <span for="password" class="label-input100">{{ __('Password') }}</span>
                                <input id="password" class="form-control @error('password') is-invalid @enderror"  
                                    type="password" name="password" required autocomplete="new-password" placeholder="Enter password">
                                <span class="focus-input100"></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        <!-- End of Password Field -->

        <!-- Password Confirmation Field -->
                        <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                                <span for="password-confirm" class="label-input100">{{ __('Confirm Password') }}</span>
                                <input id="password-confirm"   class="form-control" type="password" name="password_confirmation"  required autocomplete="new-password" 
                                placeholder="Re-enter password">
                                <span class="focus-input100"></span>
                            </div>
        <!-- End of Password Confirmation Field -->


        <!-- Register Button -->
                        <div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
                        {{ __('Register') }}
						</button>
                    </div>
        <!-- End of Register Button Section -->
                </form>
<!-- End of Form Section -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
