
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
                    {{--<a href="#" class="btn  btn-sm btn-success float-left">Add</a>--}}
                    <h2 class="text-center " style="color: #67b168">Diagnosis $ Prescription</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive ">
                        <tr>
                            <th>Patient_id</th>
                            <th>Patient ID Number</th>
                            <th>Patient Names</th>
                            <th>Diagnosis</th>
                            <th>Prescription</th>
                            <th> Doctor ID</th>
                            <th>Doctor Names</th>
                            <th>Room</th>


                        </tr>
                        @foreach($diagnosis as $diagno)
                            <tr>
                                <td>{{$diagno->schedule->patient_id}}</td>
                                <td>{{$diagno->schedule->patient->id_no}}</td>
                                <td>{{$diagno->schedule->patient->f_name." ".$diagno->schedule->patient->m_name." ".$diagno->schedule->patient->l_name}}</td>
                                <td>{{$diagno->diagnosis}}</td>
                                <td>{{$diagno->prescription}}</td>
                                <td>{{$diagno->schedule->room_doctor->doctor->id_no}}</td>
                                <td>{{$diagno->schedule->room_doctor->doctor->f_name." ".$diagno->schedule->room_doctor->doctor->l_name}}</td>
                                <td>{{$diagno->schedule->room_doctor->room->name}}</td>


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


