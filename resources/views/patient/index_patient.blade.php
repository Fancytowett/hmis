<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('dash.partials.header')
<body>
@include('dash.partials.sidenav')
<div class="page">
    @include('dash.partials.nav_header')
    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-md-1">
                @include('dash.partials.header')
                @include('dash.partials.sidenav')
            </div>
            <div class="col-md-11 ">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">

                        <h2 class="text-center text-success">Patients
                            Details</h2>

                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-striped">
                            <tr>
                                <th>ID No.</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Patient's Phone</th>
                                <th>Next of Kin Number</th>
                                <th>County</th>
                                <th>Estate/Village</th>
                                <th>Action</th>
                            </tr>
                            @foreach($patients as $patient)
                                <tr>
                                    <td>{{$patient->id_no}}</td>
                                    <td>{{$patient->f_name}}</td>
                                    <td>{{$patient->m_name}}</td>
                                    <td>{{$patient->l_name}}</td>
                                    <td>{{$patient->p_phone}}</td>
                                    <td>{{$patient->k_phone}}</td>
                                    <td>{{$patient->county->name}}</td>
                                    <td>{{$patient->estate}}</td>
                                    <td><a href="{{route('edit_patient',$patient->id)}} " class="btn btn-sm btn-outline-success">Edit</a></td>
                                    {{--<td><a href="{{route('destroy_patient',$patient->id)}}" class="btn btn-sm btn-danger">Delete</a></td>--}}
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