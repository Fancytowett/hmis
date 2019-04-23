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
                <li class="active"><a href="{{route('doc_dash')}}"> <i class="fa fa-home"></i>Home </a></li>
                <li><a href="{{route('doc_profile')}}"> <i class="fa fa-user"></i>Profile </a></li>
                <li><a href="{{route('doc_schedule')}}"> <i class="fa fa-house"></i>Schedules </a></li>



            </ul>
        </div>

    </div>
</nav>

<div class="page">
    @include('dash.partials.nav_header')
    <div class="container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
            </div>

            <div class="card ">
                <div class="card-header">
                    {{--<a href="{{route('add_doctor')}}" class="btn  btn-sm btn-success float-left">Add</a>--}}
                    <h2 class="text-center">Schedules</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive">
                        <tr>
                            <th>Doctor</th>
                            <th>Patient_id</th>
                            <th>Patient ID Number</th>
                            <th>Patient Names</th>
                            <th>Action</th>


                        </tr>
                        @foreach($schedules as $schedule)
                            <tr>
                                <td>{{$schedule->room_doctor->doctor->f_name." ".$schedule->room_doctor->doctor->l_name}}</td>
                                <td>{{$schedule->patient->id}}</td>
                                <td>{{$schedule->patient->id_no}}</td>
                                <td>{{$schedule->patient->f_name." ".$schedule->patient->l_name." ".$schedule->patient->l_name}}</td>

                                <td><a href="{{route('add_diagnosis',$schedule->id)}}" class="btn  btn-outline-success btn-sm">Diagonize</a></td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>


    @include('dash.partials.footer')

</div>
</div>
@include('dash.partials.my_scripts')
</body>
</html>