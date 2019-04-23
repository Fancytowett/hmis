<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('dash.partials.header')
<body>
@include('dash.partials.sidenav')
<div class="page">
    @include('dash.partials.nav_header')

    <div class="container mt-5">
        <div class="row justify-content-center">
            @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif

            <div class="card">
                <div class="card-header">
                    <a href="{{route('add_doctor')}}" class="btn  btn-sm btn-success float-left">Add</a>
                    <h2 class="text-center">Doctors</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive">
                        <tr>
                            <th>ID Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Action</th>

                        </tr>
                        @foreach($doctors as $doctor)
                            <tr>
                                <td>{{$doctor->id_no}}</td>
                                <td>{{$doctor->f_name}}</td>
                                <td>{{$doctor->l_name}}</td>
                                <td>{{$doctor->phone_no}}</td>
                                <td>{{$doctor->email}}</td>
                                <td><a href="{{route('edit_doctor',$doctor->id)}}" class="btn  btn-primary btn-sm">Edit</a></td>
                                <td><a href="{{route('destroy_doctor',$doctor->id)}}" class="btn  btn-sm btn-danger">Delete</a></td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
    </div>

    @include('dash.partials.footer')

</div>

@include('dash.partials.my_scripts')
</body>
</html>
