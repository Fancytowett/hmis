<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('dash.partials.header')
<body>
@include('dash.partials.sidenav')
<div class="page">
    @include('dash.partials.nav_header')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">

                        <h2 class="text-center">Update {{$consult->name}} Details</h2>
                        <a href="{{route('index_consult')}}" class=" btn btn-sm btn-success">Back</a>

                    </div>
                    <div class="card-body">
                        <form action="{{route('update_consult',$consult->id)}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name"> Name:</label>
                                <input type="text" name="name"  class="form-control" placeholder="name" value="{{old('name')? old('name'):$consult->name}}">
                                @if($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="number"> Number:</label>
                                <input type="number" name="number"  class="form-control" placeholder="consult Number" value="{{old('number')? old('number'):$consult->number}}">
                                @if($errors->has('number'))
                                    <p class="text-danger">{{$errors->first('number')}}</p>
                                @endif
                            </div>
                            <input type="submit" class="btn  btn-block btn-success" value="Update">
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



