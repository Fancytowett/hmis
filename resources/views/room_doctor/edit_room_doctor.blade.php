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
                        <h2 class="text-center"> Room Allocation</h2>
                        <a href="{{route('index_roomdoc')}}" class="btn  btn-sm btn-success float-left">back</a>

                    </div>
                    <div class="card-body">
                        <form action="{{route('store_roomdoc')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="Patient">Room:</label>
                                <select name="room_id" id="room" class="form-control">
                                    @foreach($rooms as $room)
                                        <option value="{{$room->id}}">{{$room->name}}</option>
                                    @endforeach
                                </select>

                                @if($errors->has('room_id'))
                                    <p class="text-danger">{{$errors->first('room_id')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="doctor">Doctor</label>
                                <select name="doctor_id" id="patient" class="form-control">
                                    @foreach($doctors as $doctor)
                                        <option value="{{$doctor->id}}">{{$doctor->f_name." ".$doctor->l_name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('doctor_id'))
                                    <p class="text-danger">{{$errors->first('doctor_id')}}</p>
                                @endif
                            </div>


                            <input type="submit" class="btn btn-success btn-block" value=" Update Allocation">

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




