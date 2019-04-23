<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hmis</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords"
          content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    {{--<link rel="stylesheet" type="text/css" href="{{asset('css2/font-awesome.min.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css2/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css2/style.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*html, body {*/
        /*background-color: #fff;*/
        /*color: #636b6f;*/
        /*font-family: 'Nunito', sans-serif;*/
        /*font-weight: 200;*/
        /*height: 100vh;*/
        /*margin: 0;*/
        /*}*/

        #banner {
            background: url("{{asset('img2/bg-banner.jpg')}}");
        }

        /*.full-height {*/
        /*height: 100vh;*/
        /*}*/

        /*.flex-center {*/
        /*align-items: center;*/
        /*display: flex;*/
        /*justify-content: center;*/
        /*}*/

        /*.position-ref {*/
        /*position: relative;*/
        /*}*/

        /*.top-right {*/
        /*position: absolute;*/
        /*right: 10px;*/
        /*top: 18px;*/
        /*}*/

        /*.content {*/
        /*text-align: center;*/
        /*}*/

        /*.title {*/
        /*font-size: 84px;*/
        /*}*/

        /*.links > a {*/
        /*color: #636b6f;*/
        /*padding: 0 25px;*/
        /*font-size: 13px;*/
        /*font-weight: 600;*/
        /*letter-spacing: .1rem;*/
        /*text-decoration: none;*/
        /*text-transform: uppercase;*/
        /*}*/

        /*.m-b-md {*/
        /*margin-bottom: 30px;*/
        /*}*/
    </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="flex-center position-ref full-height">
{{--@if (Route::has('login'))--}}
{{--<div class="top-right links">--}}
{{--@auth--}}
{{--<a href="{{ url('/home') }}">Home</a>--}}
{{--@else--}}
{{--<a href="{{ route('login') }}">Login</a>--}}

{{--@if (Route::has('register'))--}}
{{--<a href="{{ route('register') }}">Register</a>--}}
{{--@endif--}}
{{--@endauth--}}
{{--</div>--}}
{{--@endif--}}

<!--banner-->

    <section id="banner" class="banner">
        <div class="bg-color">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{url('/')}}"><h4
                                        style="width: 140px; margin-top: -16px;color: white;"><strong>HMIS</strong></h4>

                            </a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                            <ul class="nav navbar-nav">
                                @if (Route::has('login'))
                                    @auth

                                        @php $user_type = auth()->user()->user_type @endphp

                                        @if($user_type == 0)
                                            <li class="nav-item">
                                                <a href="{{ url('/dashboard') }} ">Home</a>
                                            </li>
                                        @elseif($user_type == 2)
                                            <li class="nav-item">
                                                <a href="{{ url('/rec_dash') }}">Home</a>
                                            </li>
                                        @elseif($user_type == 3)
                                            <li class="nav-item">
                                                <a href="{{ url('/doc_dash') }}">Home</a>
                                            </li>

                                        @endif


                                    @else
                                        <li>
                                            <a href="{{ route('login') }}">Log In</a>

                                        </li>

                                        {{--@if (Route::has('register'))--}}
                                        {{--<a href="{{ route('register') }}" class="btn btn-white">REGISTER AS</a>--}}
                                        {{--@endif--}}
                                    @endauth
                                @endif                                {{--<li class=""><a href="#service">Services</a></li>--}}
                                <li class=""><a href="#about">About</a></li>
                                <li class=""><a href="#contact">Contact</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="banner-info">
                        <div class="banner-text text-center">
                            {{--<img src="{{asset('img2/logo.png')}}" class="img-responsive">--}}
                            <h1 class="white">HMIS</h1>
                        </div>
                        <div class="banner-text text-center">
                            <h1 class="white">Healthcare at your desk!!</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor
                                incididunt ut labore et dolore magna aliqua.</p>

                            {{--@if (Route::has('login'))--}}
                            {{--@auth--}}

                            {{--@php $user_type = auth()->user()->user_type @endphp--}}

                            {{--@if($user_type == 0)--}}
                            {{--<li class="nav-item">--}}
                            {{--<a  class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a>--}}
                            {{--</li>--}}
                            {{--@elseif($user_type == 2)--}}
                            {{--<li class="nav-item">--}}
                            {{--<a  class="nav-link js-scroll-trigger" href="{{ url('') }}">Home</a>--}}
                            {{--</li>--}}
                            {{--@elseif($user_type == 3)--}}
                            {{--<li class="nav-item">--}}
                            {{--<a  class="nav-link js-scroll-trigger" href="{{ url('') }}">Home</a>--}}
                            {{--</li>--}}
                            {{--@elseif($user_type == 4)--}}
                            {{--<li class="nav-item">--}}
                            {{--<a  class="nav-link js-scroll-trigger" href="{{ url('') }}">Home</a>--}}
                            {{--</li>--}}
                            {{--@endif--}}


                            {{--@else--}}
                            {{--<a href="{{ route('login') }}" class="btn btn-appoint mt-5">Get Started</a>--}}

                            {{--@if (Route::has('register'))--}}
                            {{--<a href="{{ route('register') }}" class="btn btn-white">REGISTER AS</a>--}}
                            {{--@endif--}}
                            {{--@endauth--}}
                        </div>
                        {{--@endif--}}
                        {{--<a href="" class="btn btn-appoint mt-5">LOG IN</a><a href="" class="btn btn-white">REGISTER AS</a>--}}
                    </div>
                    <div class="overlay-detail text-center">
                        <a href="#about"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--<!--/ banner-->--}}
{{--<!--service-->--}}
{{--<section id="service" class="section-padding">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-4 col-sm-4">--}}
{{--<h2 class="ser-title">Our Service</h2>--}}
{{--<hr class="botm-line">--}}
{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris cillum.</p>--}}
{{--</div>--}}
{{--<div class="col-md-4 col-sm-4">--}}
{{--<div class="service-info">--}}
{{--<div class="icon">--}}
{{--<i class="fa fa-stethoscope"></i>--}}
{{--</div>--}}
{{--<div class="icon-info">--}}
{{--<h4>24 Hour Support</h4>--}}
{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="service-info">--}}
{{--<div class="icon">--}}
{{--<i class="fa fa-ambulance"></i>--}}
{{--</div>--}}
{{--<div class="icon-info">--}}
{{--<h4>Emergency Services</h4>--}}
{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-md-4 col-sm-4">--}}
{{--<div class="service-info">--}}
{{--<div class="icon">--}}
{{--<i class="fa fa-user-md"></i>--}}
{{--</div>--}}
{{--<div class="icon-info">--}}
{{--<h4>Medical Counseling</h4>--}}
{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="service-info">--}}
{{--<div class="icon">--}}
{{--<i class="fa fa-medkit"></i>--}}
{{--</div>--}}
{{--<div class="icon-info">--}}
{{--<h4>Premium Healthcare</h4>--}}
{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}
{{--<!--/ service-->--}}
<!--cta-->
    <section id="cta-1" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="schedule-tab">
                    <div class="col-md-4 col-sm-4 bor-left">
                        <div class="mt-boxy-color"></div>
                        <div class="medi-info">
                            <h3>Our Vision</h3>
                            <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href="#" class="medi-info-btn">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="medi-info">
                            <h3>Our Mission</h3>
                            <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href="#" class="medi-info-btn">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 mt-boxy-3">
                        <div class="mt-boxy-color"></div>
                        <div class="time-info">
                            <h3>Opening Hours</h3>
                            <table style="margin: 8px 0px 0px;" border="1">
                                <tbody>
                                <tr>
                                    <td>Monday - Friday</td>
                                    <td>8.00 - 17.00</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>9.30 - 17.30</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>9.30 - 15.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta-->
    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="section-title">
                        <h2 class="head-title lg-line">The Hmis <br>Ultimate Dream</h2>
                        <hr class="botm-line">
                        <p class="sec-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua..</p>
                        <a href="" style="color: #0cb8b6; padding-top:10px;">Know more..</a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div style="visibility: visible;" class="col-sm-9 more-features-box">
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon"><i class="fa fa-angle-right"
                                                                        aria-hidden="true"></i></div>
                            <div class="more-features-box-text-description">
                                <h3>It's something important you want to know.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon"><i class="fa fa-angle-right"
                                                                        aria-hidden="true"></i></div>
                            <div class="more-features-box-text-description">
                                <h3>It's something important you want to know.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ about-->

    <section id="cta-2" class="section-padding">
        <div class="container">
            <div class=" row">
                <div class="col-md-2"></div>
                <div class="text-right-md col-md-4 col-sm-4">
                    <h2 class="section-title white lg-line">« A few words<br> about us »</h2>
                </div>
                <div class="col-md-4 col-sm-5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a typek
                    <p class="text-right text-primary"><i>— Hmis Healthcare</i></p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!--cta-->
    <!--contact-->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="ser-title">Contact us</h2>
                    <hr class="botm-line">
                </div>
                <div class="col-md-4 col-sm-4">
                    <h3>Contact Info</h3>
                    <div class="space"></div>
                    <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>321 Awesome Street<br> Nairobi</p>
                    <div class="space"></div>
                    <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@companyname.com</p>
                    <div class="space"></div>
                    <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+254 708 733 074</p>
                </div>
                <div class="col-md-8 col-sm-8 marb20">

                    <div class="contact-info">
                        <h3 class="cnt-ttl text-center">Contact Us!</h3>
                        <div class="space"></div>
                        <div id="errormessage">
                            @if(session('message'))
                                <div class="alert alert-success">
                                    {{session('message')}}
                                </div>
                            @endif
                        </div>
                        {{--<form action="{{route('contactus')}}" method="post" role="form" class="contactForm">--}}
                            {{--{{csrf_field()}}--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" name="name" class="form-control br-radius-zero" id="name"--}}
                                       {{--placeholder="Your Name" data-rule="minlen:4"--}}
                                       {{--data-msg="Please enter at least 4 chars"/>--}}
                               {{----}}
                                {{--<div class="validation"></div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="email" class="form-control br-radius-zero" name="email" id="email"--}}
                                       {{--placeholder="Your Email" data-rule="email"--}}
                                       {{--data-msg="Please enter a valid email"/>--}}
                                {{--@if($errors->has('email'))--}}
                                    {{--<p class="text-danger">{{$errors->first('email')}}</p>--}}
                                {{--@endif--}}
                                {{--<div class="validation"></div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control br-radius-zero" name="subject" id="subject"--}}
                                       {{--placeholder="Subject" data-rule="minlen:4"--}}
                                       {{--data-msg="Please enter at least 8 chars of subject"/>--}}
                                {{--@if($errors->has('subject'))--}}
                                    {{--<p class="text-danger">{{$errors->first('subject')}}</p>--}}
                                {{--@endif--}}
                                {{--<div class="validation"></div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<textarea class="form-control br-radius-zero" name="message" rows="5"--}}
                                          {{--data-rule="required" data-msg="Please write something for us"--}}
                                          {{--placeholder="Message"></textarea>--}}
                                {{--@if($errors->has('message'))--}}
                                    {{--<p class="text-danger">{{$errors->first('message')}}</p>--}}
                                {{--@endif--}}
                                {{--<div class="validation"></div>--}}

                            {{--</div>--}}

                            {{--<div class="form-action">--}}
                                {{--<button type="submit" class="btn btn-form">Send Message</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                        <form action="{{route('contactus')}}" method="post" class="form-dark">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="Name"> Name:</label>
                                <input type="text" name="name" class="form-control" placeholder="enter your username"   data-msg="Please enter at least 4 chars">
                                @if($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                                <div class="validation"></div>

                            </div>


                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="enter your email">
                                @if($errors->has('email'))
                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="Email">Subject:</label>
                                <input type="text" name="subject" class="form-control" placeholder="enter your subject">
                                @if($errors->has('subject'))
                                    <p class="text-danger">{{$errors->first('subject')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="Message">Message</label>
                                <textarea class="form-control" name="message"></textarea>
                                @if($errors->has('message'))
                                    <p class="text-danger">{{$errors->first('message')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" value="submit" name="submit" class="btn btn-info">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ contact-->
    <!--footer-->
    <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">About Us</h4>
                        </div>
                        <div class="info-sec">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus nisi obcaecati quod
                                voluptatibus. A ab distinctio eligendi minima odit optio quidem recusandae ut. Aliquid
                                aut eius sunt voluptates voluptatibus.</p>
                        </div>
                        route
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Quick Links</h4>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li><a href="{{url('/')}}"><i class="fa fa-circle"></i>Home</a></li>
                                <li><a href="#about"><i class="fa fa-circle"></i>About</a></li>
                                <li><a href="#contact"><i class="fa fa-circle"></i>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Follow us</h4>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">
                                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        ©fancytowett Copyright 2019. All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer-->

    <script src="{{asset('js2/jquery.min.js')}}"></script>
    <script src="{{asset('js2/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js2/bootstrap.min.js')}}"></script>
    <script src="{{asset('js2/custom.js')}}"></script>
    <script src="{{asset('contactform2/contactform.js')}}"></script>
</body>
</html>
