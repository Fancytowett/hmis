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
    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-11 ">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">

                        <h2 class="text-center">Patients
                            Details</h2>
                        <a href="{{route('add_patient')}}" class="btn btn-sm btn-success">Add</a>

                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-striped">
                            <tr>
                                <th>ID No.</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Patient's Phone</th>
                                <th>Next of Kin Number</th>
                                <th>County</th>
                                <th>Estate/Village</th>
                                <th>Action</th>
                            </tr>
                            @foreach($patients as $patient)
                                <tr>
                                    <td>{{$patient->id_no}}</td>
                                    <td>{{$patient->f_name}}</td>
                                    <td>{{$patient->m_name}}</td>
                                    <td>{{$patient->l_name}}</td>
                                    <td>{{$patient->p_phone}}</td>
                                    <td>{{$patient->k_phone}}</td>
                                    <td>{{$patient->county->name}}</td>
                                    <td>{{$patient->estate}}</td>
                                    <td><a href="{{route('edit_patient_rec',$patient->id)}} " class="btn btn-sm btn-outline-success">Edit</a></td>
                                    {{----}}
                                </tr>
                            @endforeach
                        </table>
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