@extends('layouts.Login_Layout')
@section('content')
<html lang="en">
<head>
<title>Password Reset Page</title>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link rel="icon" type="image/png" href= "{{ asset('images_Login/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href= "{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href= "{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href= "{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href= "{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href= "{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href= "{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css_Login/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css_Login/main.css') }}">
<!--===============================================================================================-->
</head>
<!-- Reset Password Banner -->
    <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-form-title" style="background-image: url({{ asset('images_Login/bg-02.jpg') }});">
                        <span class="login100-form-title-1">
                        {{ __('Reset Password') }}
                        </span>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                    </div>
<!-- End of Reset Password Banner Section -->

<!-- Enter Email Address Section -->
                    <form method="POST" action="{{ route('password.email') }}" class="login100-form validate-form">
                        @csrf
                            <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                                <span for="email" class="label-input100"> {{ __('E-Mail Address') }}</span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                                placeholder="Enter E-Mail address used to login " required autocomplete="email">
                                <span class="focus-input100"></span>
                                    @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                            </div>
    <!-- End of E-Mail Address input section -->

    <!-- Send Password Reset link section -->
                    <div class="container-login100-form-btn">
                            <button  type="submit" class="login100-form-btn">
                            {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
    <!--  End of Password Reset Link Section-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
