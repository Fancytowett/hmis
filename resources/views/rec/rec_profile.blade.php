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
            <div class="col-md-6">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">My Profile</h2>
                        <a href="{{route('rec_dash')}}" class="btn  btn-sm btn-success float-left">Back</a>

                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>Name:</th>
                                <th>{{$rec->user->name." ".$rec->l_name}}</th>
                            </tr>
                            <tr>
                                <th>ID No:</th>
                                <th>{{$rec->id_no}}</th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>{{$rec->user->email}}</th>
                            </tr>
                            <tr>
                                <th>Phone No:</th>
                                <th>{{$rec->phone_no}}</th>
                            </tr>
                            <tr>
                                <td></td><td>
                                    <a href="{{route('edit_rec_dash',$rec->id)}}" class="btn btn-sm btn-outline-danger">Edit</a>

                                </td>
                            </tr>


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