<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('dash.partials.header')
<body>

{{--<nav class="side-navbar">--}}
{{--<div class="side-navbar-wrapper">--}}
{{--<!-- Sidebar Header    -->--}}
{{--<div class="sidenav-header d-flex align-items-center justify-content-center">--}}
{{--<!-- User Info-->--}}
{{--<div class="sidenav-header-inner text-center"><img src="img/avatar-4.jpg" alt="person" class="img-fluid rounded-circle">--}}
{{--<h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>--}}
{{--</div>--}}
{{--<!-- Small Brand information, appears on minimized sidebar-->--}}
{{--<div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>--}}
{{--</div>--}}
{{--<!-- Sidebar Navigation Menus-->--}}
{{--<div class="main-menu">--}}
{{--<h5 class="sidenav-heading">Main</h5>--}}
{{--<ul id="side-main-menu" class="side-menu list-unstyled">--}}
{{--<li><a href="index.html"> <i class="icon-home"></i>Home                             </a></li>--}}
{{--<li><a href="forms.html"> <i class="icon-form"></i>Forms                             </a></li>--}}
{{--<li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts                             </a></li>--}}
{{--<li><a href="tables.html"> <i class="icon-grid"></i>Tables                             </a></li>--}}
{{--<li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>--}}
{{--<ul id="exampledropdownDropdown" class="collapse list-unstyled ">--}}
{{--<li><a href="#">Page</a></li>--}}
{{--<li><a href="#">Page</a></li>--}}
{{--<li><a href="#">Page</a></li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>--}}
{{--<li> <a href="#"> <i class="icon-mail"></i>Demo--}}
{{--<div class="badge badge-warning">6 New</div></a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="admin-menu">--}}
{{--<h5 class="sidenav-heading">Second menu</h5>--}}
{{--<ul id="side-admin-menu" class="side-menu list-unstyled">--}}
{{--<li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>--}}
{{--<li> <a href="#"> <i class="icon-flask"> </i>Demo--}}
{{--<div class="badge badge-info">Special</div></a></li>--}}
{{--<li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>--}}
{{--<li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}
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
                        <a href="{{route('doc_dash')}}" class="btn  btn-sm btn-success float-left">Back</a>

                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>Name:</th>
                                <th>{{$doc->user->name." ".$doc->l_name}}</th>
                            </tr>
                            <tr>
                                <th>ID No:</th>
                                <th>{{$doc->id_no}}</th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>{{$doc->user->email}}</th>
                            </tr>
                            <tr>
                                <th>Phone No:</th>
                                <th>{{$doc->phone_no}}</th>
                            </tr>
                            <tr>
                                <td></td><td>
                                    <a href="{{route('edit_doc_dash',$doc->id)}}" class="btn btn-sm btn-outline-danger">Edit</a>

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