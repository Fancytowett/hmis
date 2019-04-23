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

                        <h2 class="text-center"> Add County</h2>
                        <a href="{{route('index_county')}}" class=" btn btn-sm btn-success">Back</a>

                    </div>
                    <div class="card-body">
                        <form action="{{route('store_county')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name"> Name:</label>
                                <input type="text" name="name"  class="form-control" placeholder="name">
                                @if($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="number"> Number:</label>
                                <input type="number" name="number"  class="form-control" placeholder="County Number">
                                @if($errors->has('number'))
                                    <p class="text-danger">{{$errors->first('number')}}</p>
                                @endif
                            </div>
                            <input type="submit" class="btn  btn-block btn-success float-right" value="Add">
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








