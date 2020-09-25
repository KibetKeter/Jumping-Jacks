<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Page title -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title href = "{{ asset('') }}">Jumping Jacks</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="http://fonts.googleapis.com/css?family=Raleway:400,200,500,600,700,800,300" rel="stylesheet" />
        <link href="default.css" rel="stylesheet" type="text/css" media="all" />
        <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
        <!--[if IE 6]>
        <link href="default_ie6.css" rel="stylesheet" type="text/css" />
        <![endif]-->
</head>
<style>
</style>
<!-- Menu Header(Wrapper) -->
<body>
<div id="wrapper">
       <!-- Menu Wrapper -->
        <div id="menu-wrapper">
            <div id="menu" class="container">
                    <ul>
                        <li class="current_page_item"><a href="{{ asset('') }}">Homepage</a></li>
                        <li><a href="#page">About</a></li>
                        <li><a href="#footer-wrapper">Contact</a></li>
                            @if (Route::has('login'))
                                @auth
                                    <li><a href="{{ url('/home') }}">Home</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                                @endauth
                            @endif
                    </ul>
            </div>
<!-- End of Menu Wrapper -->

<!-- Start of Header Wrapper -->
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="#">Jumping Jacks</a></h1>
                        <p>Food Management System</p>
                </div>
            </div>
        </div>
</div>
<!-- End of Menu Header(Wrapper) -->

<!-- Start of Image (Banner) -->
<div id="banner"></div>
<!-- End of Image Banner -->

<!-- Start of Explanation Page -->
<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Purpose of this System</h2>
				<span class="byline">System Created by the Jumping Jacks Group</span> </div>
            <p>The purpose of the <strong>Jumping Jacks Food Management System</strong> is to offer a solution to the troubles of managing stock, suppliers and donations given to any 
            organization catetring for the nutritional needs of needy citizens. The system can be used by different stakeholders.Enjoy your usage!.</p>
		</div>
</div>
<!-- End of Explanation Page -->


<!-- Footer Section(Wrapper) -->
<div id="footer-wrapper">
    <div id="footer" class="container">
        <div id="footer">
                    <h2>Follow Us</h2>
                        </div>
                            <p>Find more Information about us on the following platforms</p>
                                <ul class="contact">
                                    <li><a href= "https://twitter.com"  class="icon icon-twitter"><span>Twitter</span></a></li>
                                    <li><a href= "https://facebook.com" class="icon icon-facebook"><span>Facebook</span></a></li>
                                    <li><a href="https://dribbble.com" class="icon icon-dribbble"><span>Dribbble</span></a></li>
                                    <li><a href="https://tumblr.com" class="icon icon-tumblr"><span>Tumblr</span></a></li>
                                    <li><a href="https://pinterest.com" class="icon icon-rss"><span>Pinterest</span></a></li>
                                </ul>
                        </div>
            </div>
    </div>
    
<!-- Absolute Footer -->
            <div id="copyright" class="container">
                <p>&copy; Jumping Jacks Group. All rights reserved.
                | Design by <a href="https://templated.co/grassygrass" rel="nofollow">TEMPLATED | Implemented by <strong>Jumping Jacks Group</strong>&copy;</a>.</p>
            </div>
</div>
        </body>
    </html>
</html>
