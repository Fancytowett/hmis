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
            <div class="col-md-7">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                    <div class="card-header ">
                        <a href="{{route('rec_dash')}}" class="btn  btn-sm btn-success float-left">Back</a>

                        <h2 class="text-center"> Update {{$rec->user->name}} Details</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update_rec',$rec->id)}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="first name"> Name:</label>
                                <input type="text" name="name"  class="form-control" placeholder="Enter first name" value="{{old('name')? old('name'): $rec->user->name}}" >
                                @if($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email"  class="form-control" placeholder="Enter Email" value="{{old('email')? old('email'): $rec->user->email}}">
                                @if($errors->has('email'))
                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                            {{--<div class="form-group">--}}
                            {{--<label for="Id number">ID Number:</label>--}}
                            {{--<input type="text" name="id_no"  class="form-control" placeholder="Enter ID number" value="{{old('id_no')? old('id_no'): $rec->id_no}}">--}}
                            {{--@if($errors->has('id_no'))--}}
                            {{--<p class="text-danger">{{$errors->first('id_no')}}</p>--}}
                            {{--@endif--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="number" name="phone_no"  class="form-control" placeholder="Enter rec's Phone No." value="{{old('phone_no')? old('phone_no'): $rec->phone_no}}">
                                @if($errors->has('phone_no'))
                                    <p class="text-danger">{{$errors->first('phone_no')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="form-group">
                                <label for="cpassword"> Confirm Password:</label>
                                <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm your password" required>
                            </div>


                            <input type="submit" class="btn btn-success btn-block" value="Update">

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