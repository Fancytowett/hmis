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

                <h2 class="text-center"> Update {{$doctor->f_name}} Details</h2>
            </div>
            <div class="card-body">
                <form action="{{route('update_doctor',$doctor->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="first name">First Name:</label>
                        <input type="text" name="f_name"  class="form-control" placeholder="Enter first name" value="{{old('f_name')? old('f_name'): $doctor->f_name}}" >
                        @if($errors->has('f_name'))
                            <p class="text-danger">{{$errors->first('f_name')}}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="last name">Last Name:</label>
                        <input type="text" name="l_name"  class="form-control" placeholder="Enter  Last name" value="{{old('l_name')? old('l_name'): $doctor->l_name}}">
                        @if($errors->has('l_name'))
                            <p class="text-danger">{{$errors->first('l_name')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email"  class="form-control" placeholder="Enter Email" value="{{old('email')? old('email'): $doctor->email}}">
                        @if($errors->has('email'))
                            <p class="text-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="Id number">ID Number:</label>
                        <input type="text" name="id_no"  class="form-control" placeholder="Enter ID number" value="{{old('id_no')? old('id_no'): $doctor->id_no}}">
                        @if($errors->has('id_no'))
                            <p class="text-danger">{{$errors->first('id_no')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="number" name="phone_no"  class="form-control" placeholder="Enter doctor's Phone No." value="{{old('phone_no')? old('phone_no'): $doctor->phone_no}}">
                        @if($errors->has('phone_no'))
                            <p class="text-danger">{{$errors->first('phone_no')}}</p>
                        @endif
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


