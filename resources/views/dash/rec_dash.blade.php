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
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li class="active"><a href="{{route('rec_dash')}}"> <i class="fa fa-home"></i>Home </a></li>
                <li><a href="{{route('rec_profile')}}"> <i class="fa fa-user"></i>Profile </a></li>
                <li><a href="{{route('add_patient')}}"> <i class="fa fa-house"></i>Add Patient </a></li>
                <li><a href="{{route('add_schedule')}}"> <i class="fa fa-house"></i>Add Schedule </a></li>

            </ul>
        </div>

    </div>
</nav>

<div class="page">
@include('dash.partials.nav_header')
<!-- Statistics Section-->
    <section class="statistics mt-5">
        <div class="container-fluid mt-12">
            <div class="row d-flex">

                <div class="col-lg-6">
                    <!-- Monthly Usage-->
                    <div class="card income text-center">
                        {{--<div class="icon"><i class="icon-line-chart"></i></div>--}}
                        <strong class="text-success"
                                style="color:#33b35a !important; ">
                            Patients </strong>
                        {{--<pem ipsum dolor sit amet, consectetur adipisicing elit sed do.>Lor</p>--}}
                        <div class="number">{{\App\Patient::all()->count()}}</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- User Actibity-->
                    <div class="card income text-center">
                        {{--<div class="icon"><i class="icon-line-chart"></i></div>--}}
                        <a href="{{route('doc_schedule')}}"> <strong class="text-success"
                                                                     style="color:#33b35a !important"> Schedules
                            </strong></a>
                        {{--<pem ipsum dolor sit amet, consectetur adipisicing elit sed do.>Lor</p>--}}
                        <div class="number">{{\App\Schedule::all()->count()}}</div>
                    </div>
                </div>
            </div>

        </div>

</section>

@include('dash.partials.footer')

</div>

@include('dash.partials.my_scripts')
</body>
</html>