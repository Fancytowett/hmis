<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('dash.partials.header')
<body>
<nav class="side-navbar  ">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center">
                {{--<img src="img/avatar-2.jpg" alt="person"--}}
                                                               {{--class="img-fluid rounded-circle">--}}
                <h2 class="h5">{{strtoupper(Auth::user()->name)}}</h2><span>Welcome</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center">
                    <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li class="active"><a href="{{asset('dashboard')}}"> <i class="fa fa-home"></i>Home </a></li>
                <li><a href="{{route('index_patient')}}"> <i class="fa fa-user"></i>Patients </a></li>
                <li><a href="{{route('index_schedule')}}"> <i class="fa fa-house"></i>Schedules </a></li>



            </ul>
        </div>

    </div>
</nav>
<div class="page">
    @include('dash.partials.nav_header')
    @foreach($schedules as $schedule)
    {{dd($schedule)}}
@endforeach

    @include('dash.partials.footer')

</div>

@include('dash.partials.my_scripts')
</body>
</html>