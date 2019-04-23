

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
                        <a href="{{route('index_rec')}}" class="btn  btn-sm btn-success float-left">Back</a>

                        <h2 class="text-center"> Update {{$rec->user->name}} Details</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('edit_rec',$rec->id)}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="first name"> Name:</label>
                                <input type="text" name="name"  class="form-control" placeholder="Enter first name" value="{{old('name')? old('f_name'): $rec->user->name}}" >
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


