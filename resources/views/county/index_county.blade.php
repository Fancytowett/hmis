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
                    <div class="card-header">

                        <h2 class="text-center">Counties</h2>
                        <a href="{{route('add_county')}}" class=" btn btn-sm btn-success">Add</a>

                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>County Number</th>
                                <th>County Name</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            @foreach($counties as $county)
                                <tr>
                                    <td>{{$county->number}}</td>
                                    <td>{{$county->name}}</td>
                                    <td><a href="{{route('edit_county',$county->id)}}" class="btn btn-sm btn-primary">Edit</a></td>
                                    <td><a href="{{route('destroy_county',$county->id)}}" class="btn  btn-sm btn-danger">Delete</a></td>
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


