<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('dash.partials.header')
<body>
@include('dash.partials.sidenav')
<div class="page">
    @include('dash.partials.nav_header')
    <div class="container mt-5 ">
        <div class="row justify-content-center">

            <div class="card ">
                <div class="card-header">
                    <h2 class="text-center text-success">Schedules</h2>
                </div>
                <div class="card-body justify-content-center">
                    <table class="table table-striped table-responsive">
                        <tr>
                            <th>Patient_id</th>
                            <th>Patient ID Number</th>
                            <th>Patient Names</th>
                            <th>Doctor</th>
                            <th>Created_at</th>


                        </tr>
                        @foreach($schedules as $schedule)
                            <tr>
                                <td>{{$schedule->patient->id}}</td>
                                <td>{{$schedule->patient->id_no}}</td>
                                <td>{{$schedule->patient->f_name." ".$schedule->patient->l_name." ".$schedule->patient->l_name}}</td>
                                <td>{{$schedule->room_doctor->doctor->f_name." ".$schedule->room_doctor->doctor->l_name}}</td>
                                <td>{{$schedule->created_at}}</td>


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


