<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('dash.partials.header')
<body>
@include('dash.partials.sidenav')
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

                    <div class="card-header ">
                        <a href="{{route('index_doctor')}}" class="btn  btn-sm btn-success float-left">Back</a>

                        <h2 class="text-center">Doctor's Details</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('store_doctor')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="first name">First Name:</label>
                                <input type="text" name="f_name" class="form-control" placeholder="Enter first name">
                                @if($errors->has('f_name'))
                                    <p class="text-danger">{{$errors->first('f_name')}}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="last name">Last Name:</label>
                                <input type="text" name="l_name" class="form-control" placeholder="Enter  Last name">
                                @if($errors->has('l_name'))
                                    <p class="text-danger">{{$errors->first('l_name')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                @if($errors->has('email'))
                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="Id number">ID Number:</label>
                                <input type="text" name="id_no" class="form-control" placeholder="Enter ID number">
                                @if($errors->has('id_no'))
                                    <p class="text-danger">{{$errors->first('id_no')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="number" name="phone_no" class="form-control"
                                       placeholder="Enter doctor's Phone No.">
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

                            <input type="submit" class="btn btn-success btn-block" value="Add">

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
        @include('dash.partials.footer')



</div>
</body>
</html>