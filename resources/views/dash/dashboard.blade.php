<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('dash.partials.header')
<body>
@include('dash.partials.sidenav')
<div class="page">
@include('dash.partials.nav_header')
<!-- Statistics Section-->
    <section class="statistics mt-5">
        <div class="container-fluid mt-12">
            <div class="row d-flex">
                <div class="col-lg-4">
                    <!-- Income-->
                    <div class="card income text-center">
                        {{--<div class="icon"><i class="icon-line-chart"></i></div>--}}
                        <a href="{{route('index_doctor')}}"> <strong class="text-success"
                                                                     style="color:#33b35a !important; ">
                                Doctors</strong></a>
                        {{--<pem ipsum dolor sit amet, consectetur adipisicing elit sed do.>Lor</p>--}}
                        <div class="number">{{\App\Doctor::all()->count()}}</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Monthly Usage-->
                    <div class="card income text-center">
                        {{--<div class="icon"><i class="icon-line-chart"></i></div>--}}
                        <a href="{{route('index_patient')}}"> <strong class="text-success"
                                                                      style="color:#33b35a !important; ">
                                Patients </strong></a>
                        {{--<pem ipsum dolor sit amet, consectetur adipisicing elit sed do.>Lor</p>--}}
                        <div class="number">{{\App\Patient::all()->count()}}</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- User Actibity-->
                    <div class="card income text-center">
                        {{--<div class="icon"><i class="icon-line-chart"></i></div>--}}
                        <a href="{{route('index_consult')}}"> <strong class="text-success"
                                                                      style="color:#33b35a !important"> Consultation
                                Rooms</strong></a>
                        {{--<pem ipsum dolor sit amet, consectetur adipisicing elit sed do.>Lor</p>--}}
                        <div class="number">{{\App\Consultation::all()->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Updates Section -->
    <section class="mt-30px mb-30px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <!-- Recent Updates Widget          -->
                    <div id="new-updates" class="card updates recent-updated">
                        <div id="updates-header"
                             class="card-header d-flex justify-content-between align-items-center">
                            <h2 class="h5 display"><a data-toggle="collapse" data-parent="#new-updates"
                                                      href="#updates-box" aria-expanded="true"
                                                      aria-controls="updates-box">Room Allocation</a></h2><a
                                    data-toggle="collapse" data-parent="#new-updates" href="#updates-box"
                                    aria-expanded="true" aria-controls="updates-box"><i
                                        class="fa fa-angle-down"></i></a>
                        </div>
                        <div id="updates-box" role="tabpanel" class="collapse show">
                            <ul class="news list-unstyled">
                                <!-- Item-->
                                <li class="d-flex justify-content-between">
                                    <div class="left-col d-flex">
                                        <h6 style="color:#33b35a ">Room Name</h6>
                                    </div>
                                    <div class="right-col text-right">
                                        <h6 style="color:#33b35a ">Doctor Alocated</h6>
                                    </div>

                                </li>
                                @foreach($room_docs as $room_doc)
                                    <li class="d-flex justify-content-between">
                                        <div class="left-col d-flex">
                                            <strong>{{$room_doc->room->name}}</strong>
                                            {{--{{$room_doc->room->number}}--}}



                                        </div>
                                        <div class="right-col text-right">
                                            <strong> {{$room_doc->doctor->f_name." ".$room_doc->doctor->l_name}}</strong>

                                        </div>

                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!-- Recent Updates Widget End-->
                </div>
                <div class="col-lg-8 col-md-6 col-md-4">
                    <div class="card ">
                        <div class="card-header">
                            <h2 class="text-center">Schedules</h2>
                        </div>
                        <div class="card-body justify-content-center">
                            <table class="table table-striped table-responsive">
                                <tr>
                                    <th>Patient_id</th>
                                    <th>Patient ID Number</th>
                                    <th>Patient Names</th>
                                    <th>Doctor</th>
                                    <th>Created_at</th>


                                </tr>
                                @foreach($schedules as $schedule)
                                    <tr>
                                        <td>{{$schedule->patient_id}}</td>
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
                {{--<div class="col-lg-4 col-md-6">--}}
                    {{--<!-- Recent Activities Widget      -->--}}
                    {{--<div id="recent-activities-wrapper" class="card updates activities">--}}
                        {{--<div id="activites-header"--}}
                             {{--class="card-header d-flex justify-content-between align-items-center">--}}
                            {{--<h2 class="h5 display"><a data-toggle="collapse"--}}
                                                      {{--data-parent="#recent-activities-wrapper"--}}
                                                      {{--href="#activities-box" aria-expanded="true"--}}
                                                      {{--aria-controls="activities-box">Recent Activities</a></h2>--}}
                            {{--<a data-toggle="collapse" data-parent="#recent-activities-wrapper"--}}
                               {{--href="#activities-box" aria-expanded="true" aria-controls="activities-box"><i--}}
                                        {{--class="fa fa-angle-down"></i></a>--}}
                        {{--</div>--}}
                        {{--<div id="activities-box" role="tabpanel" class="collapse show">--}}
                            {{--<ul class="activities list-unstyled">--}}
                                {{--<!-- Item-->--}}
                                {{--<li>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-4 date-holder text-right">--}}
                                            {{--<div class="icon"><i class="icon-clock"></i></div>--}}
                                            {{--<div class="date"><span>6:00 am</span><span--}}
                                                        {{--class="text-info">6 hours ago</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-8 content"><strong>Meeting</strong>--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do--}}
                                                {{--eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut--}}
                                                {{--enim ad minim veniam, quis nostrud. </p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<!-- Item-->--}}
                                {{--<li>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-4 date-holder text-right">--}}
                                            {{--<div class="icon"><i class="icon-clock"></i></div>--}}
                                            {{--<div class="date"><span>6:00 am</span><span--}}
                                                        {{--class="text-info">6 hours ago</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-8 content"><strong>Meeting</strong>--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do--}}
                                                {{--eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut--}}
                                                {{--enim ad minim veniam, quis nostrud. </p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<!-- Item-->--}}
                                {{--<li>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-4 date-holder text-right">--}}
                                            {{--<div class="icon"><i class="icon-clock"></i></div>--}}
                                            {{--<div class="date"><span>6:00 am</span><span--}}
                                                        {{--class="text-info">6 hours ago</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-8 content"><strong>Meeting</strong>--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do--}}
                                                {{--eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut--}}
                                                {{--enim ad minim veniam, quis nostrud. </p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<!-- Item-->--}}
                                {{--<li>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-4 date-holder text-right">--}}
                                            {{--<div class="icon"><i class="icon-clock"></i></div>--}}
                                            {{--<div class="date"><span>6:00 am</span><span--}}
                                                        {{--class="text-info">6 hours ago</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-8 content"><strong>Meeting</strong>--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do--}}
                                                {{--eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut--}}
                                                {{--enim ad minim veniam, quis nostrud. </p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

    @include('dash.partials.footer')

</div>
@include('dash.partials.my_scripts')
</body>
</html>