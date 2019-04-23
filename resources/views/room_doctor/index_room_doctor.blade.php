<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('dash.partials.header')
<body>
@include('dash.partials.sidenav')
<div class="page">
    @include('dash.partials.nav_header')

    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="card ">
                <div class="card-header">
                    <h2 class="text-center">Room Allocations</h2>
                    <a href="{{route('create_roomdoc')}}" class="btn  btn-sm btn-success float-left">Add</a>

                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive">
                        <tr>
                            <th>Room Number</th>
                            <th>Room Name</th>
                            <th>Doctor's ID NO</th>
                            <th>Doctor's Name</th>


                        </tr>
                        @foreach($room_docs as $room_doc)
                            <tr>
                                <td>{{$room_doc->room->number}}</td>
                                <td>{{$room_doc->room->name}}</td>
                                <td>{{$room_doc->doctor->id_no}}</td>
                                <td>{{$room_doc->doctor->f_name." ".$room_doc->doctor->l_name}}</td>

                                <td><a href="{{route('edit_roomdoc',$room_doc->id)}}" class="btn  btn-primary btn-sm">Edit</a></td>
                                <td><a href="{{route('destroy_roomdoc',$room_doc->id)}}" class="btn  btn-sm btn-danger">Delete</a></td>

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





