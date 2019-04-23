<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('dash.partials.header')
<body>

<nav class="side-navbar  ">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img src="img/avatar-2.jpg" alt="person"
                                                               class="img-fluid rounded-circle">
                <h2 class="h5">{{strtoupper(Auth::user()->name)}}</h2><span>Welcome</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center">
                    <strong>B</strong><strong class="text-primary">D</strong></a></div>
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

    <div class="container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-md-7">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header ">
                        <h2 class="text-center text-success">Add Schedule</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('store_schedule')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="Patient">Patient:</label>
                                <select name="patient_id" id="patient" class="form-control">
                                    @foreach($patients as $patient)
                                        <option value="{{$patient->id}}">{{$patient->f_name." ".$patient->l_name." ".$patient->m_name}}</option>
                                    @endforeach
                                </select>

                                @if($errors->has('patient_id'))
                                    <p class="text-danger">{{$errors->first('patient_id')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="room_doc">Consultation Room:</label>
                                <select name="room_doc" id="room" class="form-control">
                                    @foreach($room_docs as $room_doc)
                                        <option value="{{$room_doc->id}}">{{$room_doc->room->name}}</option>
                                    @endforeach
                                </select>

                                @if($errors->has('room_doc'))
                                    <p class="text-danger">{{$errors->first('room_doc')}}</p>
                                @endif
                            </div>


                            <input type="submit" class="btn btn-success btn-block" value="Allocate">

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('dash.partials.footer')

</div>

@include('dash.partials.my_scripts')
</body>
</html>

