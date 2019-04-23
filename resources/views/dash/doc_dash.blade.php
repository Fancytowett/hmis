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
                                                               {{--class="img-fluid roun/ded-circle">--}}
                <h2 class="h5">{{strtoupper(Auth::user()->name)}}</h2><span>Welcome</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center">
                    <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li class="active"><a href="{{route('doc_dash')}}"> <i class="fa fa-home"></i>Home </a></li>
                <li><a href="{{route('doc_profile')}}"> <i class="fa fa-user"></i>Profile </a></li>
                <li><a href="{{route('doc_schedule')}}"> <i class="fa fa-house"></i>Schedules </a></li>



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
                    <div class="row justify-content-center mt-5">

                        <div class="col-md-8 ">

                            <div class="card ">
                                <div class="card-header">
                                    <h2 class="text-center text-success">Schedules</h2>
                                </div>
                                <div class="card-body justify-content-center">
                                    <table class="table table-striped table-responsive ">
                                        <tr>
                                            <th>Patient_id</th>
                                            <th>Patient ID Number</th>
                                            <th>Patient Names</th>
                                            <th>Doctor</th>
                                            <th>Created_at</th>


                                        </tr>
                                        @foreach($schedules as $schedule)
                                            <tr>
                                                <td>{{$schedule->patient->id}}</td>
                                                <td>{{$schedule->patient->id_no}}</td>
                                                <td>{{$schedule->patient->f_name." ".$schedule->patient->l_name." ".$schedule->patient->l_name}}</td>
                                                <td>{{$schedule->room_doctor->doctor->f_name." ".$schedule->room_doctor->doctor->l_name}}</td>
                                                <td>{{$schedule->created_at}}</td>


                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
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